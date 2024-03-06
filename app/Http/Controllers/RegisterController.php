<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(RegisterRequest $request, $roleName) {

        $role = Role::fetchRole($roleName);
        $attributes = $request->validated();
        $role->users()->create($attributes);
//        $attributes = array_merge($attributes, [
//            'role_id' => $role->id
//        ]);
//
//        User::create($attributes);

        return redirect()->route('home');
    }
}
