<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
     public function create(Request $request)
    {
    	$this->validate($request,[
    	'fname'=>'required|min:2|max:30',
    	'lname'=> 'required|min:2|max:30',
    	'email'=> 'required|email:rfc,dns',
    	'password' => 'required|min:8|max:128',
    	'number'=> 'nullable|digits_between:8,10']);


       // return response(null,200);
    }
}
