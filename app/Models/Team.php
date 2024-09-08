<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'team';  // Laravel automatically pluralizes table names, so specify it explicitly

    // Fillable fields
    protected $fillable = [
        'team_name',
        'team_logo1_path',
        'team_logo2_path',
        'team_sport',
        'team_division',
        'team_conference',
        'team_state',
        'team_country',
        'team_section',
        'team_league',
        'team_type',
        'team_payment',
        'team_font1',
        'team_font2',
        'team_font3',
        'team_canedit',
        'team_map',
        'team_light_text1',
        'team_light_text2',
        'team_light_text3',
        'team_light_background',
        'team_light_select',
        'team_light_accent1',
        'team_light_accent2',
        'team_light_accent3',
        'team_dark_text1',
        'team_dark_text2',
        'team_dark_text3',
        'team_dark_background',
        'team_dark_select',
        'team_dark_accent1',
        'team_dark_accent2',
        'team_dark_accent3',
    ];

    // Primary key (if it's not 'id')
    protected $primaryKey = 'team_id';
}

