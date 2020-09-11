<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminM;
use DB;

class AdminC extends Controller
{
    function index(){
    	return view('index');
    }

    function speakerdetail(){
    	return view('speaker_details');
    }

    function forms(Request $re){
    	if($re->input('now')){
    		$data = array(
	    		'name' => $re->input('name'),
	    		'email' => $re->input('email'),
	    		'access_type' => $re->input('access_type'),
	    		'created_at' => date('Y-m-d H:i:s'),
	    		'updated_at' => date('Y-m-d H:i:s')
	    	);
	    	DB::table('buy_ticket')->insert($data);
	    	return redirect('/index')->with('data','Data has been inserted successfully.');
    	}else{
    		$data = array(
	    		'name' => $re->input('name'),
	    		'email' => $re->input('email'),
	    		'subject' => $re->input('subject'),
	    		'message' => $re->input('message'),
	    		'created_at' => date('Y-m-d H:i:s'),
	    		'updated_at' => date('Y-m-d H:i:s')
	    	);
	    	DB::table('contact')->insert($data);	
	    	return redirect('/index')->with('response','Data has been inserted successfully.');
    	}    	
    }
}
