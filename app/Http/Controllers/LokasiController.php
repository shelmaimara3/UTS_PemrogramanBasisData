<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokasi;
use App\Models\Inventaris;

class LokasiController extends Controller
{
    //index menampilkan semua data
    public function index()
    {
        $lokasi = Lokasi::all();
        return view('contents.lok.lokasi', [
            'title' => 'Data Lokasi' //inisialisasi judul halaman
        ])->with('lokasi', $lokasi);
    }

    // addLokasi menampilkan form untuk insert data
    public function addLokasi()
    {
        return view('contents.lok.addLokasi', [
            'title' => 'Add Lokasi',
            'lokasis' => Lokasi::all(),
            'inventaris' => Inventaris::all()
        ]);
    }

    // store untuk menyimpan data lalu kembali ke halaman awal
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'inventaris_id' => 'required',
            'nama_ruang' => 'required',
            'lantai' => 'required',
            'deskripsi' => 'required|max:255'
        ]);
        Lokasi::create($validatedData);
        return redirect('/lokasi')->with('success', 'Data Lokasi berhasil Ditambahkan!');
    } 

    // untuk menampilkan view edit
    public function edit($id)
    {
        $lokasi = Lokasi::find($id);
        return view('contents.lok.editLokasi',[
            'lokasi' => $lokasi,
            'title' => 'Edit Data Lokasi',
            'inventaris' => Inventaris::all()
        ]);
    }

    public function update(Request $request)
    {
        $lokasi = Lokasi::find($request->id);
        $lokasi->inventaris_id = $request->inventaris_id;
        $lokasi->nama_ruang = $request->nama_ruang;
        $lokasi->lantai = $request->lantai;
        $lokasi->deskripsi = $request->deskripsi;
        $lokasi->save();
        return redirect('/lokasi')->with('lokasi_updated', 'Data Lokasi berhasil Diperbarui!');
    }

    public function destroy($id)
    {
        // delete dalam tabel peminjaman where id = id 
        Lokasi::where('id',$id)->delete();
        return redirect('/lokasi')->with('success', 'Data Lokasi berhasil Dihapus!');
    }
}
