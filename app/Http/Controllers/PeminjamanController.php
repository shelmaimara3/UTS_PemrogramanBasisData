<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventaris;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    //index menampilkan semua data
    public function index()
    {
        $peminjaman = Peminjaman::all();
        return view('contents.pnjm.peminjaman', [
            "title" => "Peminjaman" //inisialisasi judul halaman
        ])->with('peminjaman', $peminjaman);
    }

    // addPinjam menampilkan form untuk insert data
    public function addPinjam()
    {
        return view('contents.pnjm.addPinjam', [
            'title' => 'Add Peminjaman',
            'peminjaman' => Peminjaman::all(),
            'inventaris' => Inventaris::all()
        ]);
    }

    // store untuk menyimpan data lalu kembali ke halaman awal
    public function store(Request $request)
    {
       
        // ddd($request);
        $validatedData = $request->validate([
            'inventaris_id' => 'required',
            'nama_peminjam' => 'required',
            'keterangan' => 'required|max:255',
            'alamat' => 'required',
            'no_telp' => 'required',
            'scan_ktm' => 'image|file|max:1024'
        ]);

         // melakukan pengecekan gambar 
        if($request->file('scan_ktm')){
            //jika true maka akan menambahkan 1 buah validasi data diisi dengan upload gambar dan nama gambar simpan di peminjaman-images
            $validatedData['scan_ktm'] = $request->file('scan_ktm')->store('peminjaman-images');
        }
        // memasukkan ke database
        Peminjaman::create($validatedData);
        return redirect('/peminjaman')->with('success', 'Data Peminjaman berhasil Ditambahkan!');
    }

    public function destroy($id)
    {
        // delete dalam tabel peminjaman where id = id 
        Peminjaman::where('id',$id)->delete();
        return redirect('/peminjaman')->with('success', 'Data Peminjaman berhasil Dihapus!');
    }
}
