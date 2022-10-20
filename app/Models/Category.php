<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //method yang mengarah ke Inventaris
    public function inventaris()
    {
        return $this->hasMany(Inventaris::class);
    }
}
