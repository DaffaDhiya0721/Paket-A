<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    use HasFactory;

    public $fillable = ['id_siswa','tabungan', 'tgl'];
    public $visible = ['id_siswa','tabungan', 'tgl'];
    public $timestamps = true;
    
    public function Siswa() {
        return $this->hasOne(Siswa::class);
    }
}
