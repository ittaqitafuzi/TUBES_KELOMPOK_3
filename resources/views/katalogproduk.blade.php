<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Unggulan Kami</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            padding: 40px 20px;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .header-badge {
            background-color: #0d3d3d;
            color: white;
            padding: 12px 40px;
            border-radius: 50px;
            font-size: 20px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 30px;
        }

        .header-section {
            text-align: center;
            margin-bottom: 50px;
        }

        .main-title {
            font-size: 42px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 10px;
        }

        .sub-title {
            font-size: 38px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 20px;
        }

        .description {
            font-size: 16px;
            color: #333;
            max-width: 900px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .product-card {
            background: white;
            border-radius: 30px;
            border: 2px solid #e0e0e0;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            width: 100%;
            height: 280px;
            object-fit: cover;
            padding: 20px;
            background: white;
        }

        .product-info {
            padding: 25px;
            text-align: center;
        }

        .stars {
            color: #ffd700;
            font-size: 14px;
            margin-bottom: 12px;
        }

        .product-name {
            font-size: 22px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 8px;
        }

        .sales-count {
            font-size: 13px;
            color: #666;
            font-style: italic;
            margin-bottom: 15px;
        }

        .product-description {
            font-size: 14px;
            color: #555;
            line-height: 1.5;
            margin-bottom: 25px;
            min-height: 80px;
        }

        .buy-button {
            background-color: #0d3d3d;
            color: white;
            border: none;
            padding: 14px 40px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            text-decoration: none;
        }

        .buy-button:hover {
            background-color: #0a2f2f;
            transform: scale(1.05);
        }

        .buy-button svg {
            width: 18px;
            height: 18px;
        }

        @media (max-width: 768px) {
            .main-title {
                font-size: 32px;
            }

            .sub-title {
                font-size: 28px;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header-section">
            <div class="header-badge">Produk Unggulan Kami</div>
            <h1 class="main-title">4 Jamur Pilihan Terbaik</h1>
            <h2 class="sub-title">Langsung dari Kebun Pabuwaran</h2>
            <p class="description">
                Dipanen segar setiap hari, dikemas higienis, dan siap diantar ke rumah Anda. Kualitas premium dengan harga terjangkau!
            </p>
        </div>

        <div class="products-grid">
            <!-- Card 1: Jamur Tiram Putih -->
            <div class="product-card">
                <img src="{{ asset('images/jamur-tiram-putih.jpg') }}" alt="Jamur Tiram Putih" class="product-image">
                <div class="product-info">
                    <div class="stars">★★★★★</div>
                    <h3 class="product-name">Jamur Tiram Putih</h3>
                    <p class="sales-count">450+ terjual minggu ini</p>
                    <p class="product-description">
                        Menawarkan rasa ringan, manis, dengan tekstur kenyal dan lembut, sangat ideal untuk tumisan cepat atau jamur crispy
                    </p>
                    <a href="#" class="buy-button">
                        BUY NOW
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Card 2: Jamur Tiram Coklat -->
            <div class="product-card">
                <img src="{{ asset('images/jamur-tiram-coklat.jpg') }}" alt="Jamur Tiram Coklat" class="product-image">
                <div class="product-info">
                    <div class="stars">★★★★★</div>
                    <h3 class="product-name">Jamur Tiram Coklat</h3>
                    <p class="sales-count">200+ terjual minggu ini</p>
                    <p class="product-description">
                        memberikan profil rasa yang lebih "berdaging," mengingatkannya pengganti daging yang populer dan sempurna untuk semur.
                    </p>
                    <a href="#" class="buy-button">
                        BUY NOW
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Card 3: Jamur Kuping -->
            <div class="product-card">
                <img src="{{ asset('images/jamur-kuping.jpg') }}" alt="Jamur Kuping" class="product-image">
                <div class="product-info">
                    <div class="stars">★★★★★</div>
                    <h3 class="product-name">Jamur Kuping</h3>
                    <p class="sales-count">285+ terjual minggu ini</p>
                    <p class="product-description">
                        hadir dengan tekstur jeli yang sangat kenyal dan renyah, cocok untuk sup dan capcay karena rasanya yang netral.
                    </p>
                    <a href="#" class="buy-button">
                        BUY NOW
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Card 4: Jamur Kancing -->
            <div class="product-card">
                <img src="{{ asset('images/jamur-kancing.jpg') }}" alt="Jamur Kancing" class="product-image">
                <div class="product-info">
                    <div class="stars">★★★★★</div>
                    <h3 class="product-name">Jamur Kancing</h3>
                    <p class="sales-count">150+ terjual minggu ini</p>
                    <p class="product-description">
                        Dengan rasa earthy dan gurih yang kaya, jamur ini adalah primadona untuk topping pizza, pasta, atau steak.
                    </p>
                    <a href="#" class="buy-button">
                        BUY NOW
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>