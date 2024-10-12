<?php

namespace App\Models\bootcamps;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Bootcamps extends Model
{
    use HasFactory;

    protected $table = 'bootcamps'; // Nama tabel di database
    
    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'price',
        'description',
        'url_gambar',
    ];
}

