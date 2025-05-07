@extends('layouts.app')

@section('content')
<div class="bg-white p-4 sm:p-6 rounded-lg shadow-md">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 sm:mb-6 gap-2">
        <h1 class="text-xl sm:text-2xl font-bold text-black">Daftar Barang</h1>
        <a href="" class="bg-white border border-blue-500 text-black px-4 py-2 rounded-lg hover:bg-blue-400 hover:text-white transition text-sm sm:text-base">
            + Tambah Barang
        </a>     
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 text-sm sm:text-base">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-2 sm:px-6 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                    <th class="px-4 py-2 sm:px-6 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Barang</th>
                    <th class="px-4 py-2 sm:px-6 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase">Harga</th>
                    <th class="px-4 py-2 sm:px-6 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase">Stok</th>
                    <th class="px-4 py-2 sm:px-6 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($barang as $item)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 sm:px-6 sm:py-4 whitespace-nowrap">{{ $item['id'] }}</td>
                    <td class="px-4 py-2 sm:px-6 sm:py-4 whitespace-nowrap">{{ $item['nama'] }}</td>
                    <td class="px-4 py-2 sm:px-6 sm:py-4 whitespace-nowrap">Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                    <td class="px-4 py-2 sm:px-6 sm:py-4 whitespace-nowrap">{{ $item['stok'] }}</td>
                    <td class="px-4 py-2 sm:px-6 sm:py-4 whitespace-nowrap">
                        <button class="text-red-600 hover:text-red-800 text-sm">Hapus</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
