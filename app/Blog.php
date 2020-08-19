<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'username', 'career', 'socialMediaUrl', 'title', 'imageUrl', 'content'
    ];
}
