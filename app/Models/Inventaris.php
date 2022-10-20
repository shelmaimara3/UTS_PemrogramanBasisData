<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;

    //akses modifier tabel
    protected $table = 'inventaris';
    //akses modifier kolom id_inv tidak boleh diisi (mass assignment)
    protected $guarded = ['id'];

    //sebuah method model category
    public function category()
    {
        //mengembalikan relasi dari model inventaris terhadap model category 
        return $this->belongsTo(Category::class);
    }

    //sebuah method model user
    public function user()
    {
        //mengembalikan relasi dari model inventaris terhadap model user
        return $this->belongsTo(User::class);
    }

    //sebuah method model lokasi
    public function lokasi()
    {
        //mengembalikan relasi dari model inventaris terhadap model lokasi
        return $this->belongsTo(Lokasi::class);
    }

    //sebuah method model peminjaman
    public function peminjaman()
    {
        //mengembalikan relasi dari model inventaris terhadap model peminjaman
        return $this->belongsTo(Peminjaman::class);
    }
}
