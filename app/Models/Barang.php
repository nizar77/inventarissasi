<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';
    protected $fillable = [
        'kode',
        'nama_barang',
        'merek',
        'stok',
        'stok_tersedia',
        'kondisi',
        'kategori_id',
        'lokasi_id',
        'deskripsi',
    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class);
    }
}
