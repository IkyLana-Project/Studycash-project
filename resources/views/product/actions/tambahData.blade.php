@extends('layouts.main')

@section('container')
    <div class="w-full mr-48 p-3">
        <div class="bg-white w-full h-max border rounded-lg shadow-md p-4">
            <h5>Tambah Data</h5>
            <form action="/product/store" method="post" class="mt-5 flex flex-col gap-3" enctype="multipart/form-data">
                @csrf
                <input type="text" id="judulProduk" name="judulProduk" placeholder="Masukkan judul produk..." class="w-full p-3 rounded-full shadow-md border">
                <input type="text" id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi produk..." class="w-full p-3 rounded-full shadow-md border">
                <input type="text" id="harga" name="harga" placeholder="Masukkan harga produk..." class="w-full p-3 rounded-full shadow-md border">
                <input type="file" id="gambar" name="gambar" placeholder="Masukkan gambar produk..." class="w-full p-3 rounded-full shadow-md border">
                <div>
                    <button type="submit" class="bg-sky-500 p-4 rounded-full text-white font-bold">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection