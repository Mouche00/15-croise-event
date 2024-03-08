<?php

namespace App\Helpers;


class ImageHelper {

    public static function store($array)
    {
        return $array['image']->store('uploads');
    }
}
