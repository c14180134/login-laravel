<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    use SendsPasswordResetEmails, ResetsPasswords {
        SendsPasswordResetEmails::broker insteadof ResetsPasswords;
    }
    protected function redirectTo()
    {
        return '/user';
    }
    public function showResetForm(Request $request, $token = null)
    {
        return view('auth\password\reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
    protected function sendResetLinkResponse(Request $request, $response)
    {
        return redirect('/user')->with('status', trans($response));
    }
    public function reset(Request $request)
    {
        $request->validate($this->rules(), $this->validationErrorMessages());

        $response = $this->broker()->reset(
            $this->resetCredentials($request), function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );
        return $response == Password::PASSWORD_RESET
                    ? redirect($this->redirectPath())
                                ->with('status', trans($response))
                    : back()->withErrors(['email' => trans($response)]);
    }

    protected function resetCredentials(Request $request)
    {
        return $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );
    }

    protected function credentials(Request $request)
    {
        return $this->resetCredentials($request);
    }
}
