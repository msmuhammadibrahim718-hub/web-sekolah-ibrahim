<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Support\Str;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::all();

        return view('jurusan.index', compact('jurusan'));
    }

    public function show(string $slug)
    {
        // Asumsi: kolom nama jurusan adalah 'nama'. Kalau beda, sesuaikan di sini.
        $jurusan = Jurusan::all()->first(function ($j) use ($slug) {
            return Str::slug($j->nama) === $slug;
        });

        abort_if(!$jurusan, 404, 'Jurusan tidak ditemukan.');

        return view('jurusan.show', compact('jurusan'));
    }
}