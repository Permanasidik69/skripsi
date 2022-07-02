<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_Fakultas extends Model
{
    use HasFactory;
    
    protected $table = 'fakultas';
    protected $fillable = [
        'kode_fk',
        'nama_fakultas'
    ];

    public function Model_Penelitian()
    {
        return $this->hasMany('App\Models\Model_Penelitian', 'fakultas_id');
    }
    public function Model_Pkm()
    {
        return $this->hasMany('App\Models\Model_Pkm', 'fakultas_id');
    }
}
