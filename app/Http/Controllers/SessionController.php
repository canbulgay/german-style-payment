<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    /**
     * Show login page to users.
     * 
     * @return view
     */

     public function create()
     {
         // Login view
     }

     /**
      * Create a session via credentials 
      *
      * @return response
      */

      public function store(Request $request)
      {
        $credentials = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        if(! Auth::attempt($credentials)){
           throw ValidationException::withMessages([
               'email' => 'Your credentials does not match.' 
           ]);
        }

        Auth::login($credentials);

        return response()->json(['message' => 'You are logged in successfully'],200);
      }

      /**
       *  Show users information.
       * 
       * @return response
       */

       public function me()
       {
           $user = Auth::user();

           return response()->json([
               'User Information' => $user
           ],200);

       }

       /**
        * Destory users session.
        *
        * @return response
        */

        public function destroy()
        {
            auth()->logout();

            return response()->json('You are successfully logged out!',200);
        }
}
