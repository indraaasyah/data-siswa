<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = ['nama','telepon','alamat'];

    public function mapel()
    {
        // dihubungkan ke model Mapel
        // Relasi one to many. Satu guru memiliki banyak mapel
        return $this->hasMany(Mapel::class);
    }
}
