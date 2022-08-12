<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananVarian extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function items()
    {
        return $this->hasMany(LayananVarianItem::class, 'layanan_varian_id', 'id');
    }
}
