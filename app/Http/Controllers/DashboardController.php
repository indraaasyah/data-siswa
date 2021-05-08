<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class DashboardController extends Controller
{
    public function index()
    {
        // isian view blade ada di global.php atau disebut dg helpers
        return view('dashboards.index');
    }

    // Jika dijalankan di view blade dg menggunakan $s->nama_lengkap() akan muncul error Call to undefined method App\Siswa::nama_lengkap()
    public function nama_lengkap()
    {
        return $this->nama_depan.''.$this->nama_belakang;
    }
}
