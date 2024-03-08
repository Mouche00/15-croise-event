<?php

namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Facades\Session;

class FlashHelper {

    public static function sendMessage($type, $message) {

        Session::flash($type);
        Session::flash('message', $message);
    }

    public static function redirect($route, $type, $message) {

        self::sendMessage($type, $message);
        switch($route){
            case 'back':
                return redirect()->back();
            default:
                return redirect()->route($route);
        }
    }
}
