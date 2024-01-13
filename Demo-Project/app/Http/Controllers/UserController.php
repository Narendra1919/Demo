<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogUpdateRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        // dd($request);
        $user=User::create(['name'=>$request->name,'email'=>$request->email,'mobile'=>$request->mobile,'password'=>Hash::make($request->password)]);
        return redirect()->route('users.index');
      
    }
    

    /**
     * Display the specified resource.
     */
    public function login(LoginRequest $request)
    {
        // dd($request->all());
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect()->route('blogs.dashboard');
        }   
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

     }

     public function dashboardShow()
     {
         $user=Auth::user();
         return view('blog.dashboard',['user'=>$user]);
     }
     
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogUpdateRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
