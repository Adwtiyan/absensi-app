<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use DateTime;
use Illuminate\Http\Request;
use  Illuminate\Validation\Validator;

class AbsenKaryawan extends Controller
{
    public function index() {
        return view('Dashboard.AbsenKaryawan', [
            'title' => 'absenKaryawan'
        ]);
    }

    public function store(Request $request) {
        date_default_timezone_set('Asia/Jakarta');
        $waktuAbsen = new DateTime();
        $status = '';

        if($waktuAbsen->format('HH:ii:ss') > '07:00:00'){
            $status = 'terlambat';
        }else if($waktuAbsen->format('HH:ii:ss') < '07:00:00'){
            $status = 'sukses';
        }else{
            $status = 'alpha';
        }

        $validatedDataAbsen = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        Absensi::create([
            'user_id' => $request->username,
            'status' => $status,
            'waktuAbsen' => $waktuAbsen
        ]);
    }
}
