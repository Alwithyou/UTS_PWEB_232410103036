@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg"> 
    <div class="flex justify-center mb-4">
        <div class="w-32 h-32 rounded-full border-4 border-blue-600 flex items-center justify-center">
            @if(isset($profileImage) && file_exists(public_path('img/profile/' . $profileImage)))
                <img src="{{ asset('img/profile/' . $profileImage) }}" alt="Foto Profil" class="w-full h-full object-cover">
            @else
                <i class="circle text-black text-4xl"></i>
            @endif
        </div>
    </div>

    <div class="text-center mb-8">
        <a class="text-blue-600 hover:text-blue-800 text-sm font-medium">
            Edit Foto
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-gray-50 p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">Informasi Akun</h2>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm text-gray-600">Username</label>
                    <p class="font-medium text-gray-800">{{ $username ?? 'Guest' }}</p>
                </div>
                <div>
                    <label class="block text-sm text-gray-600">Role</label>
                    <p class="font-medium text-gray-800">Admin Gudang</p>
                </div>
            </div>
        </div>

        <div class="bg-gray-50 p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800">Aktivitas Terakhir</h2>
            <ul class="space-y-3">
                <li class="flex items-center text-gray-700">
                    <span class="w-3 h-3 bg-emerald-500 rounded-full mr-3"></span>
                    <span>Login terakhir: <span class="font-medium">{{ now()->format('d M Y H:i') }}</span></span>
                </li>
                <li class="flex items-center text-gray-700">
                    <span class="w-3 h-3 bg-emerald-500 rounded-full mr-3"></span>
                    <span>Aktivitas lainnya: <span class="font-medium">Pengelolaan Barang</span></span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
