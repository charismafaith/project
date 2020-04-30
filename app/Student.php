<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function student_type()
    {
    	return $this->hasOne(StudentType::class,'id','student_type_id');

        
    }
}