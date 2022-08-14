<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function galeris()
    {
        return $this->hasMany(PortofolioGaleri::class, 'portofolio_id', 'id');
    }

    public function layananjenis()
    {
        return $this->belongsTo(LayananJenis::class, 'layanan_jenis_id', 'id');
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'layanan_id', 'id');
    }
}
