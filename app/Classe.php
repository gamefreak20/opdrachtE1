<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{

    protected $fillable = [
        'name',
    ];

    public function student()
    {
        return $this->belongsToMany( 'App\Student', 'classe_student', 'student_id', 'classe_id' );
    }
}
