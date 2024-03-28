<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
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

    public function postRegistration(AuthRequest $request)
    {
        try{

            $data = $request->validated();

            User::create($data);

            return view('pages.dashboard');

        } catch(Exception $e) {
            Log::debug($e->getMessage());
        }
    }
}
