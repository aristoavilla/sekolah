<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'excerpt', 'content', 'image', 'user_id'
    ];

    // A blog belongs to a user (author)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
