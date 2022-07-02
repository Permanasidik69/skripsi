<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_Penelitian extends Model
{
    use HasFactory;

    protected $table = 'daftar_penelitian';
    protected $fillable = [
        'jenis_peneliti', 'judul_penelitian', 'tema', 'volume_jurnal', 'no_jurnal', 'link', 'lama_penelitian', 
        'sumber_dana', 'dana_penelitian'
    ];

    public function Model_Fakultas()
    {
        return $this->BelongsTo('App\Models\Model_Fakultas', 'fakultas_id');
    }
    public function Model_Prodi()
    {
        return $this->BelongsTo('App\Models\Model_Prodi', 'prodi_id');
    }
    public function Model_JenisPublikasi()
    {
        return $this->BelongsTo('App\Models\Model_JenisPublikasi', 'publikasi_id');
    }
    public function Model_KategoriJurnal()
    {
        return $this->BelongsTo('App\Models\Model_KategoriJurnal', 'kategori_jurnal_id');
    }
}
