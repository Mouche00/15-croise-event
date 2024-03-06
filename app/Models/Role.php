<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public static function getRole($name) {
        return self::where('name', $name)->first();
    }

    public function users() {
        return $this->hasMany(User::class);
    }
}
