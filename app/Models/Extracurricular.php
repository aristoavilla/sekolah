<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relationship to the Student model
    public function president()
    {
        return $this->belongsTo(Student::class, 'president_id');
    }

    // Relationship to the Teacher model
    public function advisor()
    {
        return $this->belongsTo(Teacher::class, 'advisor_id');
    }
}
