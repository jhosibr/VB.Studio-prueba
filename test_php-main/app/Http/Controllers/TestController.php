<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;


class TestController extends Controller
{
    
    public function store(Request $request)
    {
        $request->validate([

            'firtName' => 'required|string|min:3',
            'lastName' => 'required|string|min:3',
            'email' => 'required',
            'g-recaptcha-response' => function ($attribute, $value, $fail) {
                $secretkey = '6LenF3QgAAAAAE-jbK5OJVF8thUBvWw3_oYOeEvu';
                $response = $value;
                $userIP = $_SERVER['REMOTE_ADDR'];
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$$userIP";
                $response = \file_get_contents($url);
                $response = json_decode($response);
                if(!$response->success){
                    $fail($attribute.'google reCaptcha failed');
                }
            }
        ]); 
        
        $tests = new Test;
        $tests->firtName = $request->firtName;
        $tests->lastName = $request->lastName;
        $tests->email = $request->email;
        $tests->save();

        return redirect()->route('form')->with('success','Data saved successfully');
    }
    public function indexForm(){
        return view('test.form');
    }
    
    public function index(){
        $tests = Test::all();
        return view('test.viewData', ['tests'=>$tests]);
    }
}
