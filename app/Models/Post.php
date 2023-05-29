<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'description', 'author', 'slug'];

    public function author()
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }
}
