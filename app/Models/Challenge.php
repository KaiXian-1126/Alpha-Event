<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;
    protected $table = "challenge";
    public $timestamps = false;

    protected $fillable = [
        'daily_login',
        'open_leaderboard',
        'week_start_date',
        'week_end_date',
        'create_event_count',
        'invitation_count',
        'user_email',
        'invitation_achieved',
        'create_event_achieved',
    ];
}
