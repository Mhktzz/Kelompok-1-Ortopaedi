<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailObat extends Model
{
    use HasFactory;

    protected $table = 'detail_obat';

    protected $fillable = [
        'resep_obat_id',
        'nama_obat',
        'dosis',
        'frekuensi',
        'aturan_pakai',
        'catatan',
    ];

    public function resep()
    {
        return $this->belongsTo(ResepObat::class, 'resep_obat_id');
    }
}
