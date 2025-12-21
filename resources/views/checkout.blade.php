<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
</head>
<body>
    <h1>Checkout - Agro Jamur</h1>
    
    <form method="POST" action="#">
        @csrf
        
        <h3>Data Pengiriman</h3>
        
        <!-- Alamat dari profil -->
        <div style="border: 1px solid #ccc; padding: 15px; margin: 10px 0;">
            <h4>Gunakan Alamat dari Profil</h4>
            <p><strong>{{ auth()->user()->nama }}</strong></p>
            <p>Telp: {{ auth()->user()->telepon }}</p>
            <button type="button">✅ Pakai Ini</button>
        </div>
        
        <!-- Tombol alamat lain -->
        <button type="button" onclick="toggleForm()">
            📝 Gunakan Alamat Lain
        </button>
        
        <!-- Form alamat baru -->
        <div id="formAlamatBaru" style="display: none; margin-top: 20px;">
            <h4>Alamat Baru:</h4>
            <input type="text" name="nama_penerima" placeholder="Nama Penerima"><br>
            <input type="text" name="telepon" placeholder="No HP"><br>
            <textarea name="alamat" placeholder="Alamat Lengkap"></textarea><br>
            <input type="text" name="kota" placeholder="Kota">
            <input type="text" name="provinsi" placeholder="Provinsi">
        </div>
        
        <hr>
        <h3>Ringkasan Belanja</h3>
        <p>Total: Rp 60.000</p>
        
        <button type="submit" style="background: green; color: white; padding: 10px;">
            💳 Bayar Sekarang
        </button>
    </form>
    
    <script>
    function toggleForm() {
        var form = document.getElementById('formAlamatBaru');
        form.style.display = form.style.display === 'none' ? 'block' : 'none';
    }
    </script>
    
    <br>
    <a href="/">← Kembali</a>
</body>
</html>