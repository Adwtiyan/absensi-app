<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsenKaryawan extends Controller
{
    public function index() {
        return view('Dashboard.AbsenKaryawan', [
            'title' => 'absenKaryawan'
        ]);
    }

    public function store(Request $request) {
        $validatedDataAbsen = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'waktuAbsen' => 'required'
        ]);
    }

}
