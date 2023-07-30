<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function login()
    {
        return view('backend.auth.login');
    }

    public function loginSubmit(LoginRequest $request)
    {
        $auth = Auth::attempt($request->validated());
    
        if ($auth) {
           return redirect()->route('dashboard');
        }

        return redirect()->back();
    }

}
