<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Admin_model;

class Admin extends Controller
{
    public function register(Request $request){
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required',
    		'pass' => 'required',
    		'number' => 'required',
    	]);
    	$admin_model = new Admin_model;
    	$admin_model->name = $request->input('name');
    	$admin_model->email = $request->input('email');
    	$admin_model->password = $request->input('pass');
    	$admin_model->number = $request->input('number');

    	// if($request->hasfile('image')){
    	// 	$file = $request->file('image');
    	// 	$extension = $file->getClientOriginalExtension();
    	// 	$filename = time().".".$extension;
    	// 	$file->move('images/',$filename);
    	// 	$admin_model->image = $filename;
    	// }else{
    	// 	return $request;
    	// 	$admin_model->image = '';
    	// }
    	$admin_model->save();
    	return redirect('/')->with('response','Registration Successfully.');
    }
}
