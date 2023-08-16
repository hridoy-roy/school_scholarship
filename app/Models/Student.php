<?php

namespace App\Models;

use App\Models\Institute;
use App\Models\StudentClass;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

     public function institute(){
        return $this->belongsTo(Institute::class);
    }

     public function student_class(){
        return $this->belongsTo(StudentClass::class);
    }
}
