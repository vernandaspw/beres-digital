<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function layananjenis()
    {
        return $this->belongsTo(layananjenis::class, 'layanan_jenis_id', 'id');
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'layanan_id', 'id');
    }

    public function metodepembayaran()
    {
        return $this->belongsTo(MetodePembayaran::class, 'metode_pembayaran_id', 'id');
    }
}
