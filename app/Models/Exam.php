<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'exam_date',
        'exam_time',
        'first_grade',
    ];


    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
