<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Care Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            color: #2c3e50;
            text-align: center;
        }
        ul.product-list {
            list-style-type: none;
            padding: 0;
        }
        ul.product-list li {
            background: #eaeaea;
            margin: 10px 0;
            padding: 15px;
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .product-title {
            font-weight: bold;
            color: #3498db;
            margin-right: 10px;
        }
        .product-price {
            color: #e74c3c;
        }
        .product-description {
            color: #7f8c8d;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Produk Perawatan Rumah</h1>
        <ul class="product-list">
            <li>
                <span class="product-title">Pembersih Lantai</span>
                <span class="product-price">Rp 85.000</span>
            </li>
            <li>
                <span class="product-title">Pengharum Ruangan</span>
                <span class="product-price">Rp 60.000</span>
            </li>
            <li>
                <span class="product-title">Pembersih Jendela</span>
                <span class="product-price">Rp 70.000</span>
            </li>
            <li>
                <span class="product-title">Penyegar Karpet</span>
                <span class="product-price">Rp 95.000</span>
            </li>
            <li>
                <span class="product-title">Pembersih Dapur</span>
                <span class="product-price">Rp 80.000</span>
            </li>
            <li>
                <span class="product-title">Sampo Karpet</span>
                <span class="product-price">Rp 120.000</span>
            </li>
            <li>
                <span class="product-title">Disinfektan</span>
                <span class="product-price">Rp 100.000</span>
            </li>
            <li>
                <span class="product-title">Sabun Cuci Piring</span>
                <span class="product-price">Rp 55.000</span>
            </li>
            <li>
                <span class="product-title">Pembersih Kaca</span>
                <span class="product-price">Rp 65.000</span>
            </li>
            <li>
                <span class="product-title">Spons Cuci</span>
                <span class="product-price">Rp 45.000</span>
            </li>
        </ul>
    </div>
    <div class="menu">
            <a href="/home">Home Page</a>
            <a href="/category/beauty-health">Beauty Health</a>
            <a href="/category/food-beverage">Food Beverage</a>
            <a href="/category/home-care">Home Care</a>
        </div>
</body>
</html>
