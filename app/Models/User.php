<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nama',           // 
        'email',          // 
        'password',       // 
        'role',           // 
        'telepon',        // 
    ];

   
    protected $hidden = [
        'password',
       
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * METHOD TAMBAHAN UNTUK CEK ROLE
     * Biar mudah di controller/view
     */
    
    // Cek apakah user admin
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    // Cek apakah user customer
    public function isCustomer()
    {
        return $this->role === 'customer';
    }

    /**
     * RELASI (NANTI KALO BUTUH)
     */
    
    // Contoh relasi ke pesanan (nanti)
    // public function pesanans()
    // {
    //     return $this->hasMany(Pesanan::class);
    // }
    
    // Contoh relasi ke alamat (nanti)
    // public function alamats()
    // {
    //     return $this->hasMany(Alamat::class);
    // }
}