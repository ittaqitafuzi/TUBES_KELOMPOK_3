<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pemesanan Jamur</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

<!-- Navbar -->
<nav class="bg-emerald-900 text-white">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-orange-400 rounded-full"></div>
            <span class="font-semibold">Agro Jamur Pabuwaran</span>
        </div>
        <ul class="flex gap-8 text-sm">
            <li>Beranda</li>
            <li>Produk</li>
            <li>Tentang Kami</li>
            <li>Kontak</li>
        </ul>
        <div class="flex items-center gap-4">
            <span class="text-sm">@clayton</span>
        </div> 
    </div>
</nav>

<!-- Header -->
<section class="max-w-7xl mx-auto px-6 py-10">
    <div class="flex items-center gap-4">
        <div class="w-12 h-12 bg-emerald-800 text-white flex items-center justify-center rounded-xl">
            📦
        </div>
        <div>
            <h1 class="text-2xl font-bold text-emerald-900">Status Pemesanan Jamur</h1>
            <p class="text-gray-500">Pantau perkembangan pesanan Anda secara real-time</p>
        </div>
    </div>
    <hr class="mt-6">
</section>

<!-- Content -->
<section class="max-w-7xl mx-auto px-6 pb-20 grid grid-cols-1 md:grid-cols-3 gap-10">

    <!-- Daftar Pesanan -->
    <div class="bg-white rounded-2xl shadow p-6">
        <h2 class="text-lg font-semibold mb-4">Daftar Pesanan</h2>

        <!-- Filter -->
        <div class="flex gap-2 mb-6">
            <button class="px-3 py-1 text-sm rounded-full border">Semua</button>
            <button class="px-3 py-1 text-sm rounded-full border">Diproses</button>
            <button class="px-3 py-1 text-sm rounded-full border">Dikirim</button>
            <button class="px-3 py-1 text-sm rounded-full border">Selesai</button>
        </div>

        <!-- Item -->
        <div class="space-y-4">
            <!-- Order 1 -->
            <div class="border rounded-xl p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="font-semibold">ORD-2025-001</p>
                        <p class="text-sm text-gray-500">Clayton</p>
                    </div>
                    <span class="text-sm px-3 py-1 bg-blue-100 text-blue-700 rounded-full">Dikirim</span>
                </div>
                <div class="flex justify-between text-sm text-gray-500 mt-2">
                    <span>2025-12-10</span>
                    <span>Rp 125.000</span>
                </div>
            </div>

            <!-- Order 2 -->
            <div class="border rounded-xl p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="font-semibold">ORD-2025-002</p>
                        <p class="text-sm text-gray-500">Briella</p>
                    </div>
                    <span class="text-sm px-3 py-1 bg-green-100 text-green-700 rounded-full">Selesai</span>
                </div>
                <div class="flex justify-between text-sm text-gray-500 mt-2">
                    <span>2025-09-10</span>
                    <span>Rp 75.000</span>
                </div>
            </div>

            <!-- Order 3 -->
            <div class="border rounded-xl p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="font-semibold">ORD-2025-003</p>
                        <p class="text-sm text-gray-500">Kamari</p>
                    </div>
                    <span class="text-sm px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full">Diproses</span>
                </div>
                <div class="flex justify-between text-sm text-gray-500 mt-2">
                    <span>2025-12-10</span>
                    <span>Rp 150.000</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Detail Placeholder -->
    <div class="md:col-span-2 flex flex-col items-center justify-center text-center text-gray-400">
        <div class="text-7xl mb-4">📦</div>
        <p class="text-lg font-medium">Pilih daftar pesanan untuk</p>
        <p class="text-lg font-medium">melihat detail status pemesanan</p>
    </div>
</section>

<!-- Footer -->
<footer class="bg-emerald-900 text-white">
    <div class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h3 class="font-semibold mb-2">Agro Jamur Pabuwaran</h3>
            <p class="text-sm">Marketing: Jl. Gn. Merapi No.RT.02/02, Pabuaran, Purwokerto Utara</p>
            <p class="text-sm mt-2">Operational: Belakang UIN Karanganjing, Purwokerto Timur</p>
        </div>
        <div>
            <h3 class="font-semibold mb-2">Kontak Kami</h3>
            <p class="text-sm">📞 0821-3848-7484</p>
            <p class="text-sm">📸 @agrojamurpabuaran</p>
            <p class="text-sm">📘 @agrojamur</p>
        </div>
    </div>
    <div class="text-center text-sm border-t border-emerald-800 py-4">
        © 2025 Agro Jamur Pabuwaran. Hak Cipta Dilindungi.
    </div>
</footer>

</body>
</html>
