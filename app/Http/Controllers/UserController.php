<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.user.index', [
            'users' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
            return redirect('/admin/user')->with('success', 'register success');
        }else{
            return redirect('/admin/user')->with('error', 'register error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.user.show', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required',
        ];
        if($request->email != $user->email){
            $rules['email'] = 'required|unique:users|email:dns';
        }
        $validated = $request->validate($rules); 

        User::where('id', $user->id)->update($validated);

        return redirect('/admin/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::where('id', $user->id)->delete();

        return redirect('/admin/user');
    }
}
