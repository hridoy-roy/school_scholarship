<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;


    public function result(): HasOne
    {
        return $this->hasOne(Result::class);
    }

    public function examCenter()
    {
        return $this->belongsToMany(ExamCenter::class);
    }

    public function class(): HasOne
    {
        return $this->hasOne(StudentClass::class);
    }

    public function institute(): HasOne
    {
        return $this->hasOne(Institute::class);
    }
}
