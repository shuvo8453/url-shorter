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
    public function index()
    {
        return view('pages.dashboard');
    }

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
            return redirect('dashboard');
        }

        return redirect('/login');
    }

    public function postRegistration(AuthRequest $request)
    {
        try{

            $data = $request->validated();

            $user = User::create($data);

            Auth::login($user);

            return redirect('dashboard');

        } catch(Exception $e) {
            Log::debug($e->getMessage());
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
