<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class SignUpController extends Controller
{
    public function index()
    {
        return view('auth.signup');
    }

    public function signup()
    {
        $user = new User();
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save();
        $password = request('password');
        $passwordConfirm = request('password_confirmation');
        if($passwordConfirm != $password){
          return redirect('/signup')
          ->with('successStatus', 'The passwords do not match, try again');

        }else {
          return redirect('/login')
          ->with('successStatus', 'Woohoo');
        }
        // return redirect('/login');
    }
}
