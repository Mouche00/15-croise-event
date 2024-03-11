<?php

namespace App\Helpers;


class ImageHelper {

    public static function store($array)
    {

        $file = $array['image'];
        $filename= 'storage/uploads/' . date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('storage/uploads'), $filename);
        return $filename;
    }
}
