<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = [
        'penulis_id',
        'penerbit_id',
        'kategori_id',
        'buku_judul',
        'buku_isbn',
        'buku_thnterbit',
    ];

    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'penulis_id', 'id');
    }

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'penerbit_id', 'id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }
}

