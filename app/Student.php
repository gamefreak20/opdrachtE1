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
        return $this->belongsToMany( 'App\Classe');
    }

    public function groupe()
    {
        return $this->belongsToMany( 'App\Groupe', 'groupe_student', 'student_id', 'groupe_id' );
    }
}
