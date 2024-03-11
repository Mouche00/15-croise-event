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

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }

    public static function fetch($id) {

        return self::withTrashed()->findOrFail($id);
    }

    public function seatNumber() {

        return $this->reservations()->whereNotNull('validated_at')->count() + 1;
    }

    public function remainingSeats() {

        return $this->seats - ($this->seatNumber() - 1);
    }

    public function delete()
    {
        $this->reservations()->delete();

        return parent::delete();
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['query'] ?? false,
            fn($query, $search) => $query->where('title', 'like', '%' . $search . '%')
        );
    }
}
