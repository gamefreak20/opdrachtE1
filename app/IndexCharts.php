<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndexCharts extends Model
{
    protected $fillable = [
        'user_id',
        'label',
        'data',
    ];
}
