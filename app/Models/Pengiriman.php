<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nomor_resi',
        'nama_barang',
        'deskripsi',
        'nama_pengirim',
        'nomor_pengiri',
        'nama_penerima',
        'nomor_penerim',
        'koordinat_x',
        'koordinat_y',
        'biaya'
    ];
}
