<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\LoginRequest;

class AdminController extends Controller
{#
	public function index(){
		echo "You login with: ".Auth::user()->user_name;
		echo "<br>";
		return "This is a index!";
	}
    
    public function getLogin(){ return view('admin.login'); }

    public function postLogin(LoginRequest $request)
    {
        //echo $request->txtPassword;
    	$login = array(
    		'user_name' => $request->txtUsername,
    		'password' => $request->txtPassword, // must fill password field
    		);
    	if (Auth::attempt($login)) {
            return redirect()->route('getIndex');
        }else{
        	return redirect()->route('getLogin');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('getLogin');
    }


    public function getHuongDan()
    {
        if(Auth::check()){
            echo "da dang nhap";   
        }else{
            echo "chua dang nhap";
        }
        echo "<br>";
    	echo "Hay dang voi tai khoan dang nhap: admin/123";
    	return "";
    }
}
