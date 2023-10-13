<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiMatkul extends Model
{
    use HasFactory;

    // belongto schedule
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    //belongto student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
