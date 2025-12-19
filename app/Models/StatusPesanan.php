<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPesanan extends Model
{

    protected $table = 'detail_pesanan';
    protected $guarded = [];

    use HasFactory;
}
