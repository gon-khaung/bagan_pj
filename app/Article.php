<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = [
        'created_at',
        'updated_at', 'first_part', 'first_photo', 'second_photo', 'third_photo', 'background_photo', 'second_part', 'article_title', 'date', 'popular', 'local', 'golobal', 'environmental'
    ];
}
