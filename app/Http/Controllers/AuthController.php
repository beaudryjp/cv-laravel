<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function registration(){
        return view('auth.registration');
    }

    public function dashboard(){
        if(Auth::check()){
            return view('auth.dashboard');
        }

        return redirect("login");
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

    public function postLogin(Request $request){
        $request->validate([
           'email' => 'required',
           'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('cv');
        }

        return redirect('login')->with('Incorrect credentials');

    }

    public function postRegistration(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect('dashboard')->with('You have succesfully loggedin');
    }

    public function create(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
}
