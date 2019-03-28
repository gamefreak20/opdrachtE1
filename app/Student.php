<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $fillable = [
        'student_number',
        'name',
        'insertion',
        'last_name',
    ];

    public function groupe()
    {
        return $this->hasMany('App\Groupe');
    }

    public function classe()
    {
        return $this->belongsToMany( 'App\Classe', 'classe_student', 'student_id', 'classe_id' );
    }
}
