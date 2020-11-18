<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    protected $fillable = [
        'first_part', 'first_photo', 'second_photo', 'third_photo', 'background_photo','second_part', 'hotel_name', 'rating_star','near_hotel_1', 'near_hotel_2', 'near_hotel_3',
    ];
}
