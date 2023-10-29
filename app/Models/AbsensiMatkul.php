<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiMatkul extends Model
{
    use HasFactory;

    protected $fillable = [
        'schedule_id',
        'student_id',
        'kode_absensi',
        'tahun_akademik',
        'semester',
        'pertemuan',
        'latitude',
        'longtitude',
        'status',
        'created_by',
        'updated_by',
    ];

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
