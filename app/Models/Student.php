<?php

namespace App\Models;

use App\Models\Institute;
use App\Models\StudentClass;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function examCenter(): BelongsTo
    {
        return $this->belongsTo(ExamCenter::class);
    }
    public function exam(): BelongsTo
    {
        return $this->belongsTo(Exam::class);
    }

    public function institute(): BelongsTo
    {
        return $this->belongsTo(Institute::class);
    }

    public function student_class(): BelongsTo
    {
        return $this->belongsTo(StudentClass::class);
    }
}
