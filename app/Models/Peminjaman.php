<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    //akses modifier tabel
    protected $table = 'peminjamen';
    //akses modifier kolom id_inv tidak boleh diisi (mass assignment)
    protected $guarded = ['id'];

    //sebuah method model inventaris
    public function inventaris()
    {
        //mengembalikan relasi dari model peminjaman terhadap model inventaris 
        return $this->hasMany(Inventaris::class);
    }

    //sebuah method model user
    public function user()
    {
        //mengembalikan relasi dari model peminjaman terhadap model user
        return $this->hasMany(User::class);
    }
}
