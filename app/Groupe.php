<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{

    protected $fillable = [
        'assignment',
        'grade',
        'comment',
        'totalHours',
        'startDate',
        'endDate'
    ];

    public function assignment()
    {
        return $this->belongsToMany( 'App\Assignment', 'assignment_groupe', 'groupe_id', 'assignment_id' );
    }

    public function student()
    {
        return $this->belongsToMany('App\Student');
    }
}
