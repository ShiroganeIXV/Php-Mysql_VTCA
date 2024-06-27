<style>
    .container {
            background-color: #ffffff;
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 20rem;
            text-align: center;
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
</style>

<div class="container">
    <img src="./lab01/images/camera.png" alt="camera" class="product-image">
    <h2 class="product-name">Máy Ảnh Sony RX100 IV (Chính Hãng)</h2>
        <div class="price-container">
            <span class="current-price">19.090.000 ₫</span>
            <span class="old-price">22.990.000 ₫</span>
            <span class="discount">-17%</span>
        </div>
</div>