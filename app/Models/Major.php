<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug' ,'description'];

    // Relationships
    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

}
