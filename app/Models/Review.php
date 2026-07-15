<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // Menentukan kolom mana saja yang boleh diisi datanya
    protected $fillable = ['user_id', 'album_id', 'comment', 'rating'];

    // Relasi: Satu review dimiliki oleh satu user (akun)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi: Satu review menempel pada satu album
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}