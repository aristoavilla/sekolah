<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'date_hired',
        'date_retired',
        'subject_id',
        'class_id',
    ];

    public function extracurricularsAsAdvisor()
    {
        return $this->hasMany(Extracurricular::class, 'advisor_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function classroom()
    {
        return $this->hasOne(Classroom::class, 'class_id');
    }

}
