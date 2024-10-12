<?php

namespace App\Models\Magang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Peserta extends Model
{
    use HasFactory;
    protected $table = 'db_magang';
    public $incrementing = false; // Jangan auto-increment UUID
    protected $keyType = 'string'; // Tipe kunci adalah string (UUID)
    protected $fillable = [
        'nama_lengkap',
        'email',
        'nomor_wa',
        'universitas',
        'posisi_magang',
        'tipe_magang',
        'status_magang',
        'cv',
        'status',
    ];
    protected $attributes = [
        'status' => 'MENDAFTAR',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString(); // id akan diisi dengan UUID saat creating
        });
    }
}
