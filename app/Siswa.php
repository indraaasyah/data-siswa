<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama_depan','nama_belakang','jenis_kelamin','agama','alamat','avatar','user_id'];

    public function getAvatar()
    {
        if(!$this->avatar){
            return asset('images/default.jpg');
        }
        return asset ('images/'.$this->avatar);
    }

    public function mapel()
    {
        // dihubungkan ke model Mapel
        // // relasi many to many. siswa bisa memiliki banyak mata pelajaran, begitu juga sebaliknya
        return $this->belongsToMany(Mapel::class)->withPivot(['nilai'])->withTimeStamps();
    }

    // ERROR division by zero TERJADI KETIKA MENAMBAHKAN DATA SISWA. TAPI TIDAK ERROR JIKA INPUTAN DATA SISWA BARU DI DATABASE LANGSUNG DIKASI NILAI MAPEL
    public function rataRataNilai()
    {
        // ambil nilai siswa untuk membuat nilai rata2
        $total = 0;
        $hitung = 0;
        foreach($this->mapel as $mapel){
            // $total = $total + $mapel->pivot->nilai; --> cara ke 1
            // cara lainnya
            $total += $mapel->pivot->nilai;
            //untuk hitung mapel yg diambil siswa
            $hitung++;
        }
        // hitung rata2
        // $rata=($totalnilai!=0)?($totalnilai/$jumlah) * 100:0;
        return round(($total!=0)?($total/$hitung) * 100:0);
    }

    public function nilaiMtk()
    {
        $mtk = 0;
        // $hitung = 0;
        foreach($this->mapel as $mapel){
            // $total = $total + $mapel->pivot->nilai; --> cara ke 1
            // cara lainnya
            $mtk += $mapel->pivot->nilai;
            //untuk hitung mapel yg diambil siswa
            // $hitung++;
            dd($mtk->all());
        }
        // hitung rata2
        return $mtk;
    }

    public function nama_lengkap()
    {
        return $this->nama_depan.' '.$this->nama_belakang;
    }
}
