<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;


class Usercontroller extends Controller
{
    //
    public function create()
    {
        return view('Pages.Register');
    }

    public function user(Request $request)
    {
             $FormFields=$request->validate(
                [
                'Fname'=>'required|min:3',
                'Lname'=>'required|min:3',
                'pnumber'=>'required|numeric|digits:10',
                'email'=>'required|email',Rule::unique('users','email'),
                'password'=>'required|min:4|confirmed',
                ]
                );
             user::create([
                'Fname'=>$request->Fname,
                'Lname'=>$request->Lname,
                'pnumber'=>$request->pnumber,
                'email'=>$request->email,
                'password'=>$request->password,
                'logo'=>'storage/team5.jpg'
            ]);

    }
    public function logout(Request $request){

        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message','You have been logged out! ');

    }
     public function login()
    {
        return view('Pages.login');
    }

    public function authenticate(Request $request)
    {
        $email=$request['email'];
        $password=$request['password'];
        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            $request->session()->regenerate();
            return redirect('/')->with('message','You are logged in successfully');
        }
        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');
    }



}
