<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan
    protected $table = 'data_siswa';

    // Tentukan kolom-kolom yang bisa diisi massal
    protected $fillable = [
        'name',
        'email',
        'address',
        'birth_date',
    ];
}
///aplikasi sekolah mahasiswa

