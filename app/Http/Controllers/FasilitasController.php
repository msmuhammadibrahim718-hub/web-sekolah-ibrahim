<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::urut()->get();

        return view('fasilitas.index', compact('fasilitas'));
    }
}