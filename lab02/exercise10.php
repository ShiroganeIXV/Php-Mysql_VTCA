<style>
        .container {
            background-color: #ffffff;
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: calc(33.333% - 10px);
            text-align: center;
            margin: 1rem;
        }
        .product-image {
            width: 100%;
            height: auto;
        }
        .product-name {
            font-size: 1.25rem;
            font-weight: 600;
            margin-top: 1rem;
        }
        .price-container {
            display: flex;
            align-items: baseline;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 0.5rem;
        }
        .current-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: #e53e3e;
        }
        .old-price {
            text-decoration: line-through;
            color: #a0aec0;
        }
        .discount {
            color: #e53e3e;
            font-size: 0.875rem;
        }
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
    </style>

    <div class="product-grid">
        <?php
        $products = [
            [
                'image' => './lab01/images/camera.png',
                'name' => 'Máy Ảnh Canon SX730 HS (Hàng Nhập Khẩu)',
                'current_price' => '7.690.000 ₫',
                'old_price' => '9.370.000 ₫',
                'discount' => '-18%'
            ],
            [
                'image' => './lab01/images/camera.png',
                'name' => 'Máy Ảnh Canon SX720 HS (Hàng Nhập Khẩu)',
                'current_price' => '6.290.000 ₫',
                'old_price' => '7.870.000 ₫',
                'discount' => '-20%'
            ],
            [
                'image' => './lab01/images/camera.png',
                'name' => 'Máy Ảnh Canon SX 620 HS (Hàng Nhập Khẩu)',
                'current_price' => '4.890.000 ₫',
                'old_price' => '6.240.000 ₫',
                'discount' => '-22%'
            ],
            [
                'image' => './lab01/images/camera.png',
                'name' => 'Máy Ảnh Canon SX730 HS (Hàng Chính Hãng)',
                'current_price' => '9.170.000 ₫',
                'old_price' => '10.620.000 ₫',
                'discount' => '-14%'
            ],
            [
                'image' => './lab01/images/camera.png',
                'name' => 'Máy Ảnh Canon Powershot G3X (Lê Bảo Minh)',
                'current_price' => '16.990.000 ₫',
                'old_price' => '22.500.000 ₫',
                'discount' => '-24%'
            ],
            [
                'image' => './lab01/images/camera.png',
                'name' => 'Máy Ảnh Canon G9X Mark II (Hàng Nhập Khẩu)',
                'current_price' => '9.490.000 ₫',
                'old_price' => '11.990.000 ₫',
                'discount' => '-21%'
            ]
        ];

        foreach ($products as $product) {
            echo '
            <div class="container">
                <img src="' . $product['image'] . '" alt="' . $product['name'] . '" class="product-image">
                <h2 class="product-name">' . $product['name'] . '</h2>
                <div class="price-container">
                    <span class="current-price">' . $product['current_price'] . '</span>
                    <span class="old-price">' . $product['old_price'] . '</span>
                    <span class="discount">' . $product['discount'] . '</span>
                </div>
            </div>';
        }
        ?>
    </div>