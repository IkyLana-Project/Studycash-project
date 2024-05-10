@extends('layouts.main')

@section('container')
    <div class="w-full mr-48 p-10 flex flex-col">
        <h5 class="text-center">Selamat datang di halaman dashboard School gallery SMKN 2 Banjarmasin</h5>
        <h5 class="mt-6">Jumlah data produk</h5>
        <div class="p-3 mb-2 bg-warning text-dark w-32 h-24 mt-5 rounded-lg py-3 px-7">
            <a href="" class="text-white text-6xl text-center mt-2">{{ $totalProduk }}</a>
        </div>
    </div>
@endsection