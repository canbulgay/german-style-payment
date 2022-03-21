<?php

namespace App\Http\Controllers;

use App\Models\Check;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckController extends Controller
{
    /**
     * Display a listing of the checks.
     *
     * @return view
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Check  $check
     */
    public function show($id)
    {
        $check = Check::with('items','users')->whereId($id)->first();
        $authUser = Auth::user();

        if(count($check->users) > 0){
            foreach($check->users as $user){
                if($user->pivot->user_id !== $authUser->id){
                    $check->users()->attach($authUser->id);
                }
            }
        }else{
            $check->users()->attach($authUser->id);
        }

        return view('Check',[
            'check' => $check,
            'items' => $check->items,
            'user' => $authUser,
        ]);
    }
}
