<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
</head>
<body>
    <h1>Dashboard Admin Agro Jamur</h1>
    <p>Halo, <strong>{{ auth()->user()->nama }}</strong>!</p>
    <p>Email: {{ auth()->user()->email }}</p>
    <p>Role: {{ auth()->user()->role }}</p>
    
    <hr>
    <h2>Menu Admin:</h2>
    <ul>
        <li><a href="/">Lihat Katalog</a></li>
        <li><a href="#">Kelola Produk (Coming Soon)</a></li>
        <li><a href="#">Lihat Pesanan (Coming Soon)</a></li>
    </ul>
    <hr>
    <a href="/logout">Logout</a>
</body>
</html>