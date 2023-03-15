<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthChangePasswordController extends Controller
{
    public function showChangePasswordForm()
    {
        return view('auth/password/change');
    }
    public function update(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ],[
            'current_password.required'=>'password lama belum terisi',
            'password.required'=>'password baru belum terisi',
            'password.min'=>'Password harus lebih dari 8 karakter',
            'password.confirmed'=>'Password baru tidak sama dengan konfirmasi password',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            throw ValidationException::withMessages([
                'current_password' => __('auth.current_password_invalid'),
            ]);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('user');
    }
}
