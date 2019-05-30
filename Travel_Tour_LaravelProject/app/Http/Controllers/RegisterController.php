<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use Validator;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function getSignup(){
        return view();
    }
    public function postSignup(Request $request){
        $rules = [
            'email' =>'required|email',
            'password' => 'required|min:6'
        ];
        $messages = [
            'email.required' => 'vui lòng nhập email',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'vui lòng nhập password',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->level = 1;
            if($user->save()){
                Session::flash("signup_success","Registered successfully");
                return redirect('user/index');
            }else{
                return back()->withInput();
            }
        }
    }
}