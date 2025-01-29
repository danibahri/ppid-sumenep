<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class KlasifikasiInformasi extends Model
{
    protected $fillable = ['klasifikasi_informasi'];

    public function informasiPubliks()
    {
        return $this->hasMany(InformasiPublik::class);
    }

    public function infografis()
    {
        return $this->hasMany(Infografis::class);
    }
}
