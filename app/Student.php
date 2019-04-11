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

    public function classe()
    {
        return $this->belongsToMany( 'App\Classe', 'classe_student', 'student_id', 'classe_id' );
    }

    public function groupe()
    {
        return $this->belongsToMany( 'App\Classe', 'groupe_student', 'student_id', 'groupe_id' );
    }
}
