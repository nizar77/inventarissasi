<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $fillable = [
        'lokasi',
        'slug',
        'deskripsi',
    ];
    public function barangs()
    {
        return $this->hasMany(Barang::class);
    }
    
}
