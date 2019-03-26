<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    public function student()
    {
        return $this->belongsToMany( 'App\Student', 'classe_student', 'classe_id', 'student_id' );
    }
}
