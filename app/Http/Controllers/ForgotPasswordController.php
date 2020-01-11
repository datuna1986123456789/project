<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgetPasswordController extends Controller
{
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
