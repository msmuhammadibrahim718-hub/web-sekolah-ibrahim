<?php

namespace App\Http\Controllers;

use App\Models\Guru;

class GuruStaffController extends Controller
{
    public function index()
    {
        $guru = Guru::all();

        return view('guru-staff.index', compact('guru'));
    }
}