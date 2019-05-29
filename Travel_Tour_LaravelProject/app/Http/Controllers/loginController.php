<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class loginController extends Controller
{
	public function getLogin() {
    	return view('user.blocks.header');
    }
    public function postLogin(Request $request) {
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
        } else {
            $email = $request->email;
            $password = $request->password;

            if(Auth::attempt(['email'=>$email,'password'=>$password])){
                return redirect('user/index');
            }else{
                $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
                return back()->withErrors($errors);
            }
        }

    }
    public function logout(){
        
        if(Auth::logout()){
            return "Đăng xuất thành công";
        }
        return redirect('user/index');
    }
}
