<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_Pkm extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = 'pkm';
    protected $fillable = [
        'judul_pkm', 'nama_ketua', 'nama_anggotaone', 'nama_penulistwo',
        'nama_anggotathree', 'link', 'lama_kegiatan', 'sumber_dana_pkm', 'dana_pkm'
    ];

    public function Model_Fakultas()
    {
        return $this->BelongsTo('App\Models\Model_Fakultas', 'fakultas_id');
    }
    public function Model_Prodi()
    {
        return $this->BelongsTo('App\Models\Model_Prodi', 'prodi_id');
    }
}
