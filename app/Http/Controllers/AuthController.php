<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function registation()
    {
        return view('auth.registration');
    }

    public function postLogin(Request $request)
    {
        // $credentials = $request->except('name', 'confirm_password');
        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'password'
        // ]);
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return view('pages.dashboard');
        }

        return redirect('/login');
    }

    public function postRegistration(AuthRequest $request)
    {
        try{

            $data = $request->validated();

            $user = User::create($data);

            Auth::login($user);

            return view('pages.dashboard');

        } catch(Exception $e) {
            Log::debug($e->getMessage());
        }
    }
}
