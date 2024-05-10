<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProdukController extends Controller
{
    public function getTotalProduk()
    {
        return Produk::count();
    }

    public function index()
    {
        $totalProduk = $this->getTotalProduk();

        return view('dashboard.index', ['title' => 'Dashboard', 'totalProduk' => $totalProduk]);
    }

    public function getProduk()
    {
        return Produk::get();
    }

    public function getAll()
    {
        $produk = Produk::paginate(10); // Mengambil 10 data per halaman

        return view('product.index', ['title' => 'Kelola Data', 'produk' => $produk]);
    }

    public function createViews()
    {
        return view('product.actions.tambahData', ['title' => 'Tambah Data']);
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirimkan dari formulir jika diperlukan

        $produk = new Produk();
        $produk->judulProduk = $request->judulProduk;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;

        // Proses gambar jika diperlukan
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('produk', 'public');
            $produk->gambar = $gambarPath;
        }

        $produk->save();

        // Redirect atau tampilkan pesan sukses
        return redirect('/product')->with('success', 'Data produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $produk = Produk::find($id);

        return view('product.actions.editData', ['title' => 'Edit Data', 'produk' => $produk]);
    }

    public function update(Request $request, $id)
    {

        // Temukan produk yang akan diperbarui berdasarkan ID
        $produk = Produk::find($id);

        // Perbarui data produk
        $produk->judulProduk = $request->judulProduk;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;

        // Jika ada file gambar yang diunggah, proses dan simpan gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('produk', 'public');
            $produk->gambar = $gambarPath;
        }

        $produk->save();

        return redirect('/product')->with('success', 'Data produk berhasil diperbarui.');
    }

    public function delete($id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return redirect('/product')->with('error', 'Data produk tidak ditemukan.');
        }

        // Hapus gambar terkait jika ada (gunakan Storage::delete())
        if ($produk->gambar) {
            Storage::delete($produk->gambar);
        }

        // Hapus data produk
        $produk->delete();

        return redirect('/product')->with('success', 'Data produk berhasil dihapus.');
    }

}