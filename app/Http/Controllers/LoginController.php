<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\http\Request;

class LoginController extends Controller
{
    public function index()
    {
    return view('auth.login');
    }

    public function admin()
    {
        return view('admin.pages.index');
    }

    public function login (Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
        ]);
        $data = [
            'email' => $request->email,
            'password' =>Hash::make($request->password)
        ];

        $infologin = [
            'email'=> $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return  redirect('/admin')->with('success', 'Berhasil Login');
        } else {
            // return 'gagal masuk';
            return redirect('/login')->withErrors('Username dan Password yang dimasukkan Tidak Valid');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/home')->with('success', 'Berhasil Logout');
    }

    function register()
    {
        return view('auth.register');
    }

    function create(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ],[
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
        ]);
        $data = [
            'email'=> $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ];
        User::create($data);

        $infologin = [
            'email'=> $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return  redirect('/admin')->with('success', 'Berhasil Register');
        } else {
            // return 'gagal Register';
            return redirect('/login')->withErrors('Username dan Password yang dimasukkan Tidak Valid');
        }
    }
}
