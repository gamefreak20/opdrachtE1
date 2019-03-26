<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{

    protected $fillable = [
        'student_id',
    ];

    public function Student()
    {
        return $this->belongsTo('App\Student');
    }

    public function assignment()
    {
        return $this->belongsToMany( 'App\Assignment', 'assignment_groupe', 'groupe_id', 'assignment_id' );
    }
}
