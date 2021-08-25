<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SendRequest;
use	Illuminate\Support\Facades\Mail; 

class RequestController extends Controller
{
    public function send(Request $request){
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        );
        if(Mail::send(new SendRequest($request->all()))){
            return redirect()->back()->with('msg','profile was successfully update!');
        }else{
            return redirect()->back()->with('error','ERROR! could not update profile!');
        }
    }
}
