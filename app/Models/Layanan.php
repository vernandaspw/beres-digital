<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function layananjenis()
    {
        return $this->belongsTo(LayananJenis::class, 'layanan_jenis_id', 'id');
    }

    public function layananvarian()
    {
        return $this->hasMany(LayananVarian::class, 'layanan_id', 'id');
    }
}
