<?php 
namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller{
		function showLogin(){
		return view('login');
	}
	function showRegister(){
		return view('register');
	}
	function loginProcess(){
		if(auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('beranda')->with('success','login berhasil');
		}else{
			return back()->with('danger', 'login gagal, silakan cek email dan password anda');
		}

	}
	function logout(){
		Auth::logout();
		return redirect('beranda');
	}
	function Registration(){
		
	}
	function forgotpassword(){
		
	}

	

}