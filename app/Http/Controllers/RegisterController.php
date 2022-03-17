<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     *  Show register page to users.
     * 
     * @return view
     */

     public function create()
     {
         return view('register');
     }

     /**
      * Create a user via credentials.
      *
      * @return Response
      */

     public function store(Request $request)
     {
        $credentials = $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|email|unique:users,email',
            'role' => 'required',
            'company'=> 'required',
            'street_adress' => 'required',
            'city' => 'required',
            'country' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        $credentials['password'] = bcrypt($credentials['password']);
        $user = User::create($credentials);
        
        return redirect('/login')->with('success','Your registration is complete, you can log in now. ');
     }
}
