<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
   protected $redirectTo = '/dashboard';

   /**
 * Get the guard to be used during password reset.
 *
 * @return \Illuminate\Contracts\Auth\StatefulGuard
 */
protected function guard()
{
    return Auth::guard('guard-name');
},

/**
 * Get the broker to be used during password reset.
 *
 * @return PasswordBroker
 */
public function broker()
{
    return Password::broker('name');
}
}
