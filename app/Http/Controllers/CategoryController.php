<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //index menampilkan semua data
    public function index()
    {
        $categories = Category::all();
        return view('contents.cat.category', [
            'title' => 'Data Kategori' //inisialisasi judul halaman
        ])->with('category', $categories);
    }
}
