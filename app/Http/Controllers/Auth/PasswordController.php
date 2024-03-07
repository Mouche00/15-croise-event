<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\FlashHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordRequest;
use App\Mail\ResetMail;
use App\Models\Token;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PasswordController extends Controller
{
    // RETURN EMAIL FORM VIEW
    public function index() {
        return view('auth.password.index');
    }

    public function store(Request $request) {

        $attributes = $request->validate([
            'email' => 'required|email|exists:users'
        ]);

        $attributes = array_merge($attributes, [
            'token' => Str::random(64)
        ]);

        Token::create($attributes);

        Mail::to($attributes['email'])->send(new ResetMail($attributes['token']));

        return FlashHelper::redirect('home', 'success', 'Email sent successfully');
    }

    // RETURN PASSWORD RESET FORM VIEW
    public function edit($token) {

        return view('auth.password.reset', compact('token'));
    }

    public function update(PasswordRequest $request) {

        $attributes = $request->validated();

        $token = Token::where('email', $attributes['email'])->where('token', $attributes['token']);

        if(! $token) {

            return FlashHelper::redirect('back', 'error', 'Invalid Token');
        }

        User::where('email', $attributes['email'])->update([
            'password' => bcrypt($attributes['password'])
        ]);
        $token->delete();

        return FlashHelper::redirect('login', 'success', 'Password updated successfully');
    }
}
