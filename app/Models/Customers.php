<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
  
    protected $table = 'customers';
    protected $guarded = [];

    public function alamat()
    {
        return $this->hasMany(Alamat::class, 'customer_id');
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'customer_id');
    }


    use HasFactory;
}
