<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';
    protected $fillable = ['kode','nama','semester'];

    public function siswa()
    {
        // relasi many to many. mata pelajaran bisa dimiliki banyak siswa, begitu juga sebaliknya
        return $this->belongsToMany(Siswa::class)->withPivot(['nilai']);
    }

    public function guru()
    {
        // dihubungkan ke model Guru
        // relasi one to many, Mata pelajaran dimiliki satu guru.
        return $this->belongsTo(Guru::class);
    }
}
