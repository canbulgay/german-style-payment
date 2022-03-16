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
            'street_adress' => 'required',
            'city' => 'required',
            'country' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);
        
        $credentials['password'] = bcrypt($credentials['password']);
        $user = User::create($credentials);

        // Users pasword hashing is in the model.
        
        return redirect('/dashboard')->with('success','Yes Bu bir kayıttır.');
     }
}
