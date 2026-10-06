<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventRegistration extends Model
{
    protected $fillable = [
        'type',
        'full_name',
        'phone',
        'email',
        'region',
        'district',
        'team_name',
        'school',
        'age_group',
        'players_count',
        'jersey_color',
        'has_goalkeeper_jersey',
        'gender',
        'dob',
        'profession',
        'organization',
        'experience',
        'motivation',
        'availability',
        'company_name',
        'support_type',
        'message',
        'team_photo',
        'player_list',
        'parental_consent',
        'agreement'
    ];
}