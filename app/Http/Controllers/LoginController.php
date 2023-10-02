<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('admin/login');
    }

    public function register(Request $request)
    {
        $rules = [
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:6|max:255|same:passwordConfirmation',
        ];
        $validated = $request->validate($rules); 

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect('/admin/login')->with('register', 'success');
    }

    public function login(Request $request){
        $rules = [
            'email' => 'required|email:dns', 
            'password' => 'required|min:6|max:255', 
        ];
        $validated = $request->validate($rules); 
        
        if(Auth::attempt($validated)){
            $request->session()->regenerate(); 

            return redirect()->intended('/admin');
        }
    }

    public function logout(Request $request){
        Auth::logout(); 

        $request->session()->invalidate(); 

        $request->session()->regenerateToken(); 

        return redirect('/admin/login');
    }
}
