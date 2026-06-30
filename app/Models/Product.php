<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'kode_produk',
        'nama_produk',
        'harga_jual',
        'harga_beli_pokok',
        'kategori_id',
        'stok',
        'stok_minimal',
        'is_active',
        'keterangan',
    ];

    public static function nomorProduk()
    {
        $prefix = 'SKU-';
        $maxId = self::max('id');
        $kode_produk = $prefix . str_pad($maxId + 1, 5, '0',STR_PAD_LEFT);
        return $kode_produk;
    }
}
