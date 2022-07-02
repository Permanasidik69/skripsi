<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $fillable = [
        'npm', 'nama', 'alamat', 'no_hp'
    ];

    public function Model_Prodi()
    {
        return $this->BelongsTo('App\Models\Model_Prodi', 'prodi_id');
    }
}
