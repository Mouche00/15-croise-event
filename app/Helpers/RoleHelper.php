<?php

namespace App\Helpers;

use App\Models\User;

class RoleHelper {

    public static function getAuthRole() {

        return self::getRole(auth()->user());
    }

    public static function getRole(User $user) {

        return $user->role()->first()->name;
    }

    public static function getUser() {

        return auth()->user();
    }
}
