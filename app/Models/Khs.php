<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khs extends Model
{
    use HasFactory;

    //belongto student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    //belongto subject
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
