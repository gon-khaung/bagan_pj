<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagoda extends Model
{
    protected $table = 'pagodas';
    protected $fillable = [
        'first_part', 'first_photo', 'second_photo', 'third_photo', 'background_photo','second_part', 'pagoda_name', 'near_pagoda_1', 'near_pagoda_2', 'near_pagoda_3',
    ];
}
