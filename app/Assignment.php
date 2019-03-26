<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{

    protected $fillable = [
        'number',
        'title',
        'time',
        'value',
        'conditional'
    ];

    public function groupe()
    {
        return $this->belongsToMany( 'App\Groupe', 'assignment_groupe', 'assignment_id', 'groupe_id' );
    }
}
