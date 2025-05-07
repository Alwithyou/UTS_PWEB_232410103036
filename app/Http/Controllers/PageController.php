<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $barang = [
        ['id' => 1, 'nama' => 'Beras 5kg', 'harga' => 50000, 'stok' => 20, 'gambar' => 'beras.jpg'],
        ['id' => 2, 'nama' => 'Minyak Goreng 2L', 'harga' => 25000, 'stok' => 15, 'gambar' => 'minyak.jpeg'],
        ['id' => 3, 'nama' => 'Gula Pasir 1kg', 'harga' => 12000, 'stok' => 30, 'gambar' => 'gula.jpeg'],
        ['id' => 4, 'nama' => 'Tepung Terigu 1kg', 'harga' => 9000, 'stok' => 25, 'gambar' => 'tepung.jpg'],
        ['id' => 5, 'nama' => 'Mie Instan 1 Dus', 'harga' => 45000, 'stok' => 40, 'gambar' => 'mie.jpg'],
        ['id' => 6, 'nama' => 'Kopi Sachet 10pcs', 'harga' => 15000, 'stok' => 35, 'gambar' => 'kopi.jpeg'],
        ['id' => 7, 'nama' => 'Teh Celup 25pcs', 'harga' => 10000, 'stok' => 20, 'gambar' => 'teh.jpeg'],
        ['id' => 8, 'nama' => 'Susu Bubuk 400g', 'harga' => 38000, 'stok' => 18, 'gambar' => 'susu.jpg'],
        ['id' => 9, 'nama' => 'Telur Ayam 1kg', 'harga' => 23000, 'stok' => 28, 'gambar' => 'telur.jpg'],
        ['id' => 10, 'nama' => 'Sabun Mandi 2pcs', 'harga' => 8000, 'stok' => 50, 'gambar' => 'sabun.jpg'],
    ];    

    public function showLogin()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        return redirect()->route('dashboard', [
            'username' => $request->input('username') 
        ]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        $barang = $this->barang;

        return view('dashboard', compact('username', 'barang'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    public function pengelolaan()
    {
        return view('pengelolaan', ['barang' => $this->barang]);
    }
}