<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'no_rm',
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'telepon',
        'status_pasien'
    ];

    // Pasien → banyak rekam medis
    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }
}
