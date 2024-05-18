<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    public $fillable = ['nis','nama','kelas','jk','agama','alamat','foto'];
    public $visible = ['nis','nama','kelas','jk','agama','alamat','foto'];
    public $timestamps = true;

    public function Tabungan() {
        return $this->belongsTo(Tabungan::class);
    }

    // menghapus foto
    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/siswa/' . $this->foto))) {
            return unlink(public_path('images/siswa/' . $this->foto));
        }
    }
}
