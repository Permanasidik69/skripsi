<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_JenisPublikasi extends Model
{
    use HasFactory;

    protected $table = 'jenis_publikasi';
    protected $fillable = [
        'publikasi'
    ];

    public function Model_Penelitian()
    {
        return $this->hasMany('App\Models\Model_Penelitian', 'publikasi_id');
    }
}
