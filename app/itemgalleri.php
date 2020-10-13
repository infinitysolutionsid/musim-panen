<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemgalleri extends Model
{
    protected $table = 'itemgalleris';
    protected $fillable = [
        'itemid', 'fileimg'
    ];
}
