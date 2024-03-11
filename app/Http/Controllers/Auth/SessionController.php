<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\RoleHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function store(LoginRequest $request) {

        $attributes = $request->validated();

        if( ! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your credentials could not be verified'
            ]);
        }

        session()->regenerate();

        $role = RoleHelper::getAuthRole();
        $route = $role === 'client' ? 'home' : $role;

        Session::flash('success');
        return redirect()->route($route)->with('message', 'You have logged in successfully');
    }

    public function destroy() {
        auth()->logout();

        session()->invalidate();
        session()->regenerateToken();

        Session::flash('success');
        return redirect()->route('home')->with('message', 'You have logged out successfully');
    }
}
