<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            //request's rules (L!g)
            'email' => 'required|email',
            'password' => 'required|min:8'
            //add this after the '8' if u want at least one uppercase and lowercase letter and one number ----->      |regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/
        ]);
        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('admin.dashboard')); //intended is used while redirecting (specifically where the redirect is pointed at) (L!g)
        }

        // if unseccessful, then redirect to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
