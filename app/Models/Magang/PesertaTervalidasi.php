<?php

namespace App\Models\Magang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class PesertaTervalidasi extends Model
{
    use HasFactory;
    protected $table = 'data_magang_tervalidasi';
    public $incrementing = false; // Jangan auto-increment UUID
    protected $keyType = 'string'; // Tipe kunci adalah string (UUID)
    protected $fillable = [
        'nama_lengkap',
        'universitas',
        'jurusan',
        'nim',
        'posisi_magang',
        'email',
        'no_wa',
        'durasi_magang'
    ];
    protected $attributes = [
        'notifikasi_send_wa' => 'BELUM TERKIRIM',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString(); // id akan diisi dengan UUID saat creating
        });
    }
}
