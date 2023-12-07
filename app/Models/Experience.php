<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model {
    use HasFactory;


    protected $fillable = [
        'title',
        'position',
        'description',
        'start_date',
        'end_date',
        'location',
        'skills_used',
        'is_current',
        'responsibilities',
        'portfolio_links',
        'user_id',
    ];

    // Relation avec le modèle User
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getEndDateAttribute($value) {
        return \Carbon\Carbon::parse($value)->format('Y-m-d');
    }
    public function getStartDateAttribute($value) {
        return \Carbon\Carbon::parse($value)->format('Y-m-d');
    }

    public function scopeCurrent($query) {
        return $query->where('is_current', true);
    }
}
