<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use NunoMaduro\Collision\Adapters\Phpunit\Style;

class AuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request){
       $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
       ]);
       
       if(Auth::attempt($credentials)){
        return redirect(route('home'));
       }else{
        return back()->withInput()->with('message','Credential are incorrect please try again');
       }
    }
    
    public function register_view()
    {
        return view('auth.register');
        
    }

    public function register(Request $request){
        $credentials= $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        if(Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }
    
         return redirect('register')->withError('Error');
        
    }

    public function home(){
        return view('home');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}

