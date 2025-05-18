<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = [
        'buku_penulis_id',
        'buku_penerbit_id',
        'buku_kategori_id',
        'buku_rak_id',
        'buku_judul',
        'buku_ison',
        'buku_thnterbit',
    ];

    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'buku_penulis_id', 'id');
    }

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'buku_penerbit_id', 'id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'buku_kategori_id', 'id');
    }

    public function rak()
    {
        return $this->belongsTo(Rak::class, 'buku_rak_id', 'id');
    }
}
