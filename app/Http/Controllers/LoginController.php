<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
   {
	return view('login');
   }

   public function login_proses(Request $request)
{
	$validasi = $request->validate([
		'email'     => 'required|email',
		'password'  => 'required'
	]);

	if (Auth::attempt($validasi)) {
		$request->session()->regenerate();
		return redirect()->intended('/dashboard');
	}

	return back()->with('loginError', 'Gagal Login');
}
	public function logout(Request $request)
{
	Auth::logout();
	$request->session()->invalidate();
	$request->session()->regenerateToken();
	return redirect('/');
}
}
