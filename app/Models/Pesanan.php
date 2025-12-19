<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';
    protected $guarded = [];

    public function detail()
{
    return $this->hasMany(DetailPesanan::class, 'pesanan_id');
}

public function status()
{
    return $this->belongsTo(StatusPesanan::class, 'status_pesanan_id');
}

public function alamat()
{
    return $this->belongsTo(Alamat::class, 'alamat_id');
}


    use HasFactory;
}
