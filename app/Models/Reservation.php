<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function event() {

        return $this->belongsTo(Event::class);
    }

    public function client() {

        return $this->belongsTo(User::class, 'client_id');
    }

    public static function fetch($id) {

        return self::withTrashed()->findOrFail($id);
    }
}
