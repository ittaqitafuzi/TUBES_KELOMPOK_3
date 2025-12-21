<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        $produks = [
            [
                'nama' => 'Jamur Tiram Putih',
                'harga' => 16000,
                'stok' => 100,
                'deskripsi' => 'Menawarkan rasa ringan, manis, dengan tekstur kenyal dan lembut, sangat ideal untuk tumisan cepat atau jamur crispy',
                'gambar' => 'jamur_tiram_putih.jpg',
                'kategori' => 'tiram_putih', // GANTI INI!
            ],
            [
                'nama' => 'Jamur Tiram Coklat',
                'harga' => 17000,
                'stok' => 80,
                'deskripsi' => 'Memberikan profil rasa yang lebih "berdaging," mengingatkannya pengganti daging yang populer dan sempurna untuk semur.',
                'gambar' => 'jamur_tiram_coklat.jpg',
                'kategori' => 'tiram_coklat', // GANTI INI!
            ],
            [
                'nama' => 'Jamur Kuping',
                'harga' => 16000,
                'stok' => 120,
                'deskripsi' => 'Hadir dengan tekstur jeli yang sangat kenyal dan renyah, cocok untuk sup dan capcay karena rasanya yang netral.',
                'gambar' => 'jamur_kuping.jpg',
                'kategori' => 'kuping', // INI BENER
            ],
            [
                'nama' => 'Jamur Kancing',
                'harga' => 38000,
                'stok' => 60,
                'deskripsi' => 'Dengan rasa earthy dan gurih yang kaya, jamur ini adalah primadona untuk topping pizza, pasta, atau steak.',
                'gambar' => 'jamur_kancing.jpg',
                'kategori' => 'kancing', // INI BENER
            ],
        ];

        foreach ($produks as $produk) {
            Produk::updateOrCreate(
                ['nama' => $produk['nama']],
                $produk
            );
        }

        echo "✅ 4 produk jamur sudah siap!\n";
        echo "1. Jamur Tiram Putih - Rp 16.000\n";
        echo "2. Jamur Tiram Coklat - Rp 17.000\n";
        echo "3. Jamur Kuping - Rp 16.000\n";
        echo "4. Jamur Kancing - Rp 38.000\n";
    }
}