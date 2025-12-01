<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';
    protected $primaryKey = 'id_pasien';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nama_pasien',
        'nik',
        'no_bpjs',
        'tanggal_lahir',
        'umur',
        'jenis_kelamin',
        'alamat',
        'nomor_hp',
        'penanggung_jawab',
    ];
}
