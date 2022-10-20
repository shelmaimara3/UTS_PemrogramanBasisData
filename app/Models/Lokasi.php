<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    //akses modifier tabel
    protected $table = 'lokasis';
    //akses modifier kolom id_inv tidak boleh diisi (mass assignment)
    protected $guarded = ['id'];

    //sebuah method model inventaris
    public function inventaris()
    {
        //mengembalikan relasi dari model lokasi terhadap model inventaris
        return $this->hasMany(Inventaris::class);
    }
}
