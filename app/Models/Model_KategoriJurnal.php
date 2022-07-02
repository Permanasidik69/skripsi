<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_KategoriJurnal extends Model
{
    use HasFactory;

    protected $table = 'kategori_jurnal';
    protected $fillable = [
        'jenis_jurnal'
    ];

    public function Model_Penelitian()
    {
        return $this->hasMany('App\Models\Model_Penelitian', 'kategori_jurnal_id');
    }
}
