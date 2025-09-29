<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    private $data = [];


    public function index()
    {
        $laporan = [
            ["id" => 1, "judul" => "Jalan rusak", "deskripsi" => "Banyak lubang di jalan dekat pasar"],
            ["id" => 2, "judul" => "Lampu mati", "deskripsi" => "Lampu jalan padam sejak 3 hari"],
        ];
        return view('laporan.index', compact('laporan'));
    }


    public function create()
    {
        return view('laporan.create');
    }


    public function store(Request $request)
    {
        return "Laporan berhasil dibuat! Judul: " . $request->judul . " | Deskripsi: " . $request->deskripsi;
    }
}
