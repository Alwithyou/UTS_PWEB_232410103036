@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    @if(request()->query('username'))
        <div class="mb-6 p-4 border-l-4 border-black bg-gray-50">
            <h3 class="font-bold text-black">Selamat datang, {{ request()->query('username') }}</h3>
            <p class="text-sm text-gray-600">Berikut daftar barang di etalase koperasi</p>
        </div>
    @endif

    <h1 class="text-2xl font-bold mb-6 text-black">Etalase Barang</h1>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach($barang as $item)
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition border border-gray-200">
            <img src="{{ asset('img/barang/' . $item['gambar']) }}" alt="{{ $item['nama'] }}" class="w-full h-48 object-contain">
            <div class="p-4">
                <h3 class="font-bold text-lg mb-2">{{ $item['nama'] }}</h3>
                <p class="text-gray-600 mb-2">Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                <p class="text-sm text-gray-500">Stok: {{ $item['stok'] }}</p>
                <button class="mt-4 w-full bg-green-600 text-white py-1 rounded hover:bg-green-700">
                    Tambah ke Keranjang
                </button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection