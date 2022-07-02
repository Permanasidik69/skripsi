<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_Prodi extends Model
{
    use HasFactory;

    protected $table = 'prodi';
    protected $fillable = [
        'program_studi'
    ];

    public function Model_Penelitian()
    {
        return $this->hasMany('App\Models\Model_Penelitian', 'prodi_id');
    }
    public function Model_Pkm()
    {
        return $this->hasMany('App\Models\Model_Pkm', 'prodi_id');
    }
    public function Model_Dosen()
    {
        return $this->hasMany('App\Models\Model_Dosen', 'prodi_id');
    }
    public function Model_Mahasiswa()
    {
        return $this->hasMany('App\Models\Model_Mahasiswa', 'prodi_id');
    }
}
