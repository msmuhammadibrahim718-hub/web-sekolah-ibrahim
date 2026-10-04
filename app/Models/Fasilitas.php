<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas';

    protected $fillable = [
        'nama',
        'deskripsi',
        'gambar',
        'kategori',
        'urutan',
    ];

    /**
     * Urutkan berdasarkan kolom 'urutan', lalu nama.
     */
    public function scopeUrut($query)
    {
        return $query->orderBy('urutan')->orderBy('nama');
    }
}