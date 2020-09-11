<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\My_model;
// use Illuminate\Support\Facades\DB;
use DB;

class User_Controller extends Controller
{
    function index(){
    	return view('register');
    }

    function save(Request $re){
    	if($re->input('save')){
	    	$this->validate($re, [
	    		'name' => 'required',
	    		'email' => 'required',
	    		'password' => 'required',
	    		'gender' => 'required',
	    		'number' => 'required',
	    		'dob' => 'required',
	    		'city' => 'required',
	    		'pincode' => 'required',
	    		'state' => 'required',
	    		'country' => 'required',
	    	]);
	    	$data = array(
	    		'name' => $re->input('name'),
	    		'email' => $re->input('email'),
	    		'password' => $re->input('password'),
	    		'gender' => $re->input('gender'),
	    		'number' => $re->input('number'),
	    		'dob' => $re->input('dob'),
	    		'city' => $re->input('city'),
	    		'pincode' => $re->input('pincode'),
	    		'state' => $re->input('state'),
	    		'country' => $re->input('country'),
	    		'created_at' => date('Y-m-d H:i:s'),
	    		'updated_at' => date('Y-m-d H:i:s')
	    	);
	    	DB::table('client')->insert($data);
	    	return redirect('/')->with('response','Client registration has been successful.');
	    }
    }

    function login_page(){
    	return view('login');
    }

    function login(Request $re){
    	if($re->input('login')){
	    	$this->validate($re, [
	    		'email' => 'required',
	    		'password' => 'required'
	    	]);
	    	$data = array(
	    		'email' => $re->input('email'),
	    		'password' => $re->input('password'),
	    		'status' => 1
	    	);
	    	$users = DB::table('client')->where($data)->get();
	    	$re->session()->put('info',$users);
	    	$email = $re->session()->get('info');
	    	if(!empty($email[0]->email)){
	    		return redirect('/view');
	    	}else{
	    		return redirect('/login_page')->with('response','Invalid email or password.');
	    	}
	    }
    }

    function logout(Request $re){
    	if($re->session()->exists('info')){
	    	$re->session()->flush();
	    }
	    return redirect('/login_page');
    }

    function view(Request $re){
    	if($re->session()->exists('info')){
    		$users = DB::table('client')->orderBy('name','ASC')->get();
    		return view('viewdata')->with('client',$users);
    	}else{
    		return redirect('/logout');
    	}
    	
    }

    function delete(Request $re){
    	if($re->session()->exists('info')){
	    	$id = $re->input('del');
	    	$users = DB::table('client')->where('id',$id)->delete();
	    	return redirect('/view');
	    }else{
	    	return redirect('/logout');
	    }
    }

    function update(Request $re){
    	if($re->session()->exists('info')){
    		$id = $re->input('ed');
	    	$users = DB::table('client')->where('id',$id)->get();
	    	return view('editdata')->with('client',$users);	
    	}else{
    		return redirect('/logout');
    	}
    }

    function edit(Request $re){
    	if($re->session()->exists('info')){
	    	if($re->input('edit')){
		    	$this->validate($re, [
		    		'name' => 'required',
		    		'gender' => 'required',
		    		'number' => 'required',
		    		'dob' => 'required',
		    		'city' => 'required',
		    		'pincode' => 'required',
		    		'state' => 'required',
		    		'country' => 'required',
		    	]);
		    	$id = $re->input('id');
		    	$data = array(
		    		'name' => $re->input('name'),
		    		'gender' => $re->input('gender'),
		    		'number' => $re->input('number'),
		    		'dob' => $re->input('dob'),
		    		'city' => $re->input('city'),
		    		'pincode' => $re->input('pincode'),
		    		'state' => $re->input('state'),
		    		'country' => $re->input('country'),
		    		'updated_at' => date('Y-m-d H:i:s')
		    	);
		    	$users = DB::table('client')->where('id',$id)->update($data);
		    }
		    return redirect('/view');
		}else{
			return redirect('/logout');
		}
    }

    function inactive(Request $re){
    	if($re->session()->exists('info')){
	    	if($re->input('acti')){
	    		$id = $re->input('act');
	    		$data = array(
		    		'status' => 0,
		    		'updated_at' => date('Y-m-d H:i:s')
		    	);
		    	$users = DB::table('client')->where('id',$id)->update($data);
		    }
		    return redirect('/view');
		}else{
			return redirect('/logout');
		}
    }

    function active(Request $re){
    	if($re->session()->exists('info')){
	    	if($re->input('inacti')){
	    		$id = $re->input('inact');
	    		$data = array(
		    		'status' => 1,
		    		'updated_at' => date('Y-m-d H:i:s')
		    	);
		    	$users = DB::table('client')->where('id',$id)->update($data);
		    }
		    return redirect('/view');
	    }else{
			return redirect('/logout');
		}
    }
}
