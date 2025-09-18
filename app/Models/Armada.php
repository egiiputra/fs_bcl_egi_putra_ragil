<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
    protected $table = 'armada';

    protected $primaryKey = 'id';
    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'plat_nomor',
        'jenis',
        'tersedia',
        'kapasitas',
    ];
    
    const CREATED_AT = 'create_at';
    const UPDATED_AT = 'updated_at';
}
