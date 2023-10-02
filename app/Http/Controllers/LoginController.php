<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
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
            'name' => 'required',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:6|max:255',
        ];
        $validated = $request->validate($rules); 

        $validated['password'] = Hash::make($validated['password']);
        $validated['status'] = 'admin';

        if(User::create($validated)){
            return redirect('/admin/login')->with('success', 'register success');
        }else{
            return redirect('/admin/login')->with('error', 'register error');
        }

    }

    public function login(Request $request){
        $rules = [
            'email' => 'required|email:dns', 
            'password' => 'required|min:6|max:255', 
        ];
        $validated = $request->validate($rules); 
        
        if(Auth::attempt($validated)){
            $request->session()->regenerate(); 

            return redirect()->intended('/admin/transaction');
        }

        return back()->with('error', 'login failed');

    }

    public function logout(Request $request){
        Auth::logout(); 

        $request->session()->invalidate(); 

        $request->session()->regenerateToken(); 

        return redirect('/admin/login');
    }
}
