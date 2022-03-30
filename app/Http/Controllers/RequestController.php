<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SendRequest;
use	Illuminate\Support\Facades\Mail; 
use Validator;
use Session;

class RequestController extends Controller
{
    public function send(Request $request){
        $rule = [
            'name'=> 'min:3|max:100|required',
            'email'=> 'min:3|max:200|required',
            'subject'=> 'required',
            'message'=> 'required| min: 50'
        ];

        $validate = Validator::make($request->all(), $rule);

        if($validate->fails()){
            Session::put('v_errors', $validate->errors());
            Session::put('err_title', 'Input Validation Error');
            return redirect()->back();
        }else {
            $data = array(
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
                'subject' => $request->subject,
            );
    
            // if(Mail::send(new SendRequest($request->all()))){
            if(Mail::send(new SendRequest($data))){
                Session::put('msg',"Request Successfully send! We'll get back to you shortly");
                Session::put('msg_title', "Request sent!");
                return redirect()->back();
            }else{
                Session::put('msg', "Error occured! Your request could not be sent");
                Session::put('msg_title', "Error sending request!");
                return redirect()->back();
            }
        }

        
        // if(Mail::send(new SendRequest($request->all()))){
        //     return redirect()->back()->with('msg','profile was successfully update!');
        // }else{
        //     return redirect()->back()->with('error','ERROR! could not update profile!');
        // }
    }
}
