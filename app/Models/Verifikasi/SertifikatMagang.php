<?php

namespace App\Models\Verifikasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SertifikatMagang extends Model
{
    use HasFactory;
    protected $table = 'db_sertifikat_magang';
    protected $fillable = [
        'reg_sertifikat',
        'nama_lengkap',
        'qrcode_sertifikat',
    ];
    protected $attributes = [
        'status' => 'PROSES'
    ];
}
