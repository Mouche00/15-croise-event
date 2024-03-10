<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function organizer() {
        return $this->belongsTo(User::class, 'organizer_id');
    }

    public static function fetch($id) {

        return self::withTrashed()->findOrFail($id);
    }
}
