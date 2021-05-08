<?php
use App\Siswa;
use App\Guru;
use App\Mapel;

function ranking5Besar()
{
    $siswa = Siswa::all();
    $siswa->map(function($s){
        $s->rataRataNilai = $s->rataRataNilai();
        return $s;
    });
    $siswa = $siswa->sortByDesc('rataRataNilai')->take(5);
    return $siswa;
}

function rankingMtk()
{
    $siswa = Siswa::all();
    $siswa->map(function($s){
        $s->nilaiMtk = $s->nilaiMtk();
        return $s;
    });
    $siswa = $siswa->sortByDesc('nilaiMtk')->take(5);
    return $siswa;
}

function totalSiswa()
{
    return Siswa::count();
}

function totalGuru()
{
    return Guru::count();
}

function totalPelajaran()
{
    return Mapel::count();
}
