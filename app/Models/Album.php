<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'artist', 'cover_image', 'genre','spotify_link'];

    // Menambahkan relasi ke tabel reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}