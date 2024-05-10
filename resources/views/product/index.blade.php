@extends('layouts.main')

@section('container')
<div class="p-3">
    <div class="bg-white border-lg border w-full max-h-screen rounded-lg shadow-md p-4">
        <h5 class="text-2xl font-bold border-b p-1">Kelola data barang</h5>
        <div class="mt-5">
            <a href="/actions/tambahData" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Tambah Produk</a>
            <div class="mt-5 overflow-x-auto">
                <table class="p-3 mb-2 bg-black text-white text-white text-center w-full table-auto">
                    <thead>
                        <tr>
                            <th class="p-2">ID</th>
                            <th class="p-2">Judul Produk</th>
                            <th class="p-2">Deskripsi Produk</th>
                            <th class="p-2">Harga</th>
                            <th class="p-2">Gambar</th>
                            <th class="p-2">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-black">
                        @foreach($produk as $produk)
                        <tr class="border-b">
                            <td class="p-2">{{ $produk->id }}</td>
                            <td class="p-2">{{ $produk->judulProduk }}</td>
                            <td class="p-2">{{ $produk->deskripsi }}</td>
                            <td class="p-2">{{ $produk->harga }}</td>
                            <td class="p-2"><img src="{{ $produk->gambar }}" alt="gambar" class="w-12 h-12 object-cover"></td>
                            <td class="p-2 flex flex-row items-center gap-3">
                                <a href="/actions/editData/{{ $produk->id }}" class="btn btn-outline-info"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                <a href="/actions/deleteData/{{ $produk->id }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
