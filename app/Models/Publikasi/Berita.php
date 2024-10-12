<?php

namespace App\Models\Publikasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $fillable = [
        'user_id',
        'judul',
        'slug',
        'penulis',
        'deskripsi',
        'url_gambar',
    ];
}
