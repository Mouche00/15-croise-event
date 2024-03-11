<?php

namespace App\Http\Controllers;

use App\Helpers\FlashHelper;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ban(User $user) {

        $user->delete();

        return FlashHelper::redirect('back', 'success', 'User banned successfully');
    }

    public function unban($userID) {

        $user = User::withTrashed()->findOrFail($userID);
        $user->restore();

        return FlashHelper::redirect('back', 'success', 'User unbanned successfully');
    }
}
