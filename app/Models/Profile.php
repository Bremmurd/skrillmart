<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'signup_bonus',
        'available_balance',
        'trivia_earnings',
        'blogging_earnings',
        'referral_earnings',
        'ammount_withdrawn',
    ];

    public function user()
    {
        return $this->belongsTo(App\Profile::class);
    }
}
