<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortURL extends Model
{
    protected $table = 'short_urls';

    /** @var array */
    protected $fillable = [
        'url',
        'short',
        'created_at',
    ];
}
