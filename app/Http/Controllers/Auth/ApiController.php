<?php

namespace StockFlowSite\Http\Controllers\Auth;

use StockFlowSite\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use StockFlowSite\Crypto;
use StockFlowSite\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }

    //Prende la history degli acquisti
    public function getUserCryptos(Request $request) {
        $cryptos = Crypto::where('user_id', $request->input('id'))->get();
        return response()->json($cryptos);
    }

    //Inviare dati delle crypto acquistate
    public function postUserCryptos(Request $request) {
        $crypto = new Crypto;
        $crypto->name = $request->input('name');
        $crypto->quantity = $request->input('quantity');
        $crypto->value = $request->input('value');
        $crypto->user_id = $request->input('user_id');
        $crypto->save();
        return response()->json('{"status":"Transazione avvenuta!"}');
    }

    //prende tutti gli utenti
    public function getUsers(Request $request) {
        if (Hash::check($request->input('password'), User::where('email', $request->input('email'))->value('password'))) {
            $users = User::where('email', $request->input('email'))->get();
            return response()->json($users);
        } else {
            return response()->json(0);
        }
    }
}
