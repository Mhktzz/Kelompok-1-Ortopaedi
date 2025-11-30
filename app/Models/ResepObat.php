<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResepObat extends Model
{
    use HasFactory;

    protected $table = 'resep_obat';

    protected $fillable = [
        'kode_resep',
        'tanggal',
        'nama_dokter',
        'nama_pasien',
        'catatan',
    ];

    public function detailObat()
    {
        return $this->hasMany(DetailObat::class, 'resep_obat_id');
    }
}
