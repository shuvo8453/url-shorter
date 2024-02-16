<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function registation()
    {
        return view('pages.auth.registration');
    }

    public function postRegistration(RegistrationRequest $registrationRequest)
    {

    }
}
