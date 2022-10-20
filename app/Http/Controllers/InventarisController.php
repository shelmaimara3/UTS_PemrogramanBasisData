<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventaris;
use App\Models\Category;
use App\Models\User;
use App\Models\Lokasi;

class InventarisController extends Controller
{
    //index menampilkan semua data
    public function index()
    {
        $inventaris = Inventaris::all();
        return view('contents.inv.inventaris', [
            'title' => 'Data Inventaris' //inisialisasi judul halaman
        ])->with('inventaris', $inventaris);
    }

    // menampilkan detail inventaris sesuai id
    public function getInvById($id)
    {
        $inventaris = Inventaris::where('id',$id)->first();
        return view('contents.inv.showInv', [
            'title' => 'Detail Inventaris',
            'categories' => Category::all(),
            'lokasis' => Lokasi::all()
        ],compact('inventaris'));
    }

     // addInv menampilkan form untuk insert data
     public function addInv()
     {
         return view('contents.inv.addInv', [
             'title' => 'Add Inventaris',
             'categories' => Category::all(),
             'lokasis' => Lokasi::all()
         ]);
     }

     // store untuk menyimpan data lalu kembali ke halaman awal
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'lokasis_id' => 'required',
            'nama' => 'required',
            'kondisi' => 'required'
        ]);
        Inventaris::create($validatedData);
        return redirect('/inventaris')->with('success', 'Data Inventaris berhasil Ditambahkan!');
    } 


    // untuk menampilkan view edit
    public function edit($id)
    {
        $inventaris = Inventaris::find($id);
        return view('contents.inv.editInv', [
            'inventaris' => $inventaris,
            'title' => 'Edit Data Inventaris', //inisialisasi judul halaman
            'categories' => Category::all(),
            'lokasis' => Lokasi::all()
        ]);
    }

    public function update(Request $request)
    {
        
        $inventaris = Inventaris::find($request->id);
        $inventaris->category_id = $request->category_id;
        $inventaris->lokasis_id = $request->lokasis_id;
        $inventaris->nama = $request->nama;
        $inventaris->kondisi = $request->kondisi;
        $inventaris->save();
        return redirect('/inventaris')->with('inventaris_updated', 'Data Inventaris berhasil Diedit!');
    }

    public function destroy($id)
    {
        // delete dalam tabel peminjaman where id = id 
        Inventaris::where('id',$id)->delete();
        return redirect('/inventaris')->with('success', 'Data Inventaris berhasil Dihapus!');
    }
}
