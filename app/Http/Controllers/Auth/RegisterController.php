<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Role;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(RegisterRequest $request, $roleName) {

        $role = Role::fetchRole($roleName);
        $attributes = $request->validated();
        $role->users()->create($attributes);

        Session::flash('success');
        return redirect()->route('login')->with('message', 'You have registered successfully');
    }
}
