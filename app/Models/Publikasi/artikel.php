<?php

namespace App\Models\Publikasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    
    protected $table = 'artikels'; // Nama tabel di database
    
    protected $fillable = [
        'user_id',
        'judul',
        'slug',
        'penulis',
        'deskripsi',
        'url_gambar',
    ];
}
