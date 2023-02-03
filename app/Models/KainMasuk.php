<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KainMasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pelanggan',
        'id_jenis',
        'berat',
        'harga1',
        'id_helaian',
        'jumlah',
        'harga2',
        'harga_total',
        'pembayaran',
        'status'
    ];

    public function pelanggan():BelongsTo
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan', 'id');
    }

    public function jenis():BelongsTo
    {
        return $this->belongsTo(Jenis::class, 'id_jenis', 'id');
    }

    public function helaian():BelongsTo
    {
        return $this->belongsTo(Helaian::class, 'id_helaian', 'id');
    }

}
