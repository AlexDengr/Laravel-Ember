<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fields = [
        'name', 'id', 'preview_text', 'preview_image', 'html_text', 'created_at'
    ];
}
