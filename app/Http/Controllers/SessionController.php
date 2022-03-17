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
        return view('login');
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

        session()->regenerate();
        return redirect('/dashboard')->with('success','You are successfully sign in!');

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

            return redirect('/');
        }
}
