<style>
        .top-banner {
            background-color: #005cbf;
            color: white;
            padding: 5px 0;
            text-align: center;
            font-size: 14px;
        }
        .top-banner a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }
        .header {
            background-color: #189eff;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .header .logo {
            display: flex;
            align-items: center;
        }
        .header .logo img {
            height: 40px;
            margin-right: 10px;
        }
        .header .logo span {
            font-size: 18px;
            font-weight: 700;
            color: white;
        }
        .header .search-bar {
            flex-grow: 2;
            margin: 0 20px;
            display: flex;
            align-items: center;
        }
        .header .search-bar input {
            flex-grow: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-right: 10px;
        }
        .header .search-bar button {
            background-color: #ffeb3b;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        .header .nav-links {
            display: flex;
            align-items: center;
        }
        .header .nav-links a {
            margin-left: 20px;
            text-decoration: none;
            color: white;
            font-size: 14px;
            display: flex;
            align-items: center;
        }
        .header .nav-links a img {
            height: 20px;
            margin-right: 5px;
        }
        .header .nav-links a span {
            background-color: white;
            color: #005cbf;
            padding: 2px 5px;
            border-radius: 50%;
            font-size: 12px;
            margin-left: 5px;
        }
        .sub-nav {
            background-color: #f3f3f3;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 14px;
        }
        .sub-nav a {
            text-decoration: none;
            color: #333;
            margin-right: 20px;
            display: flex;
            align-items: center;
        }
        .sub-nav a img {
            height: 20px;
            margin-right: 5px;
        }
    </style>

<div class="top-banner">
        <a href="#">Ưu đãi đối tác</a>
        <a href="#">Phiếu quà tặng</a>
        <a href="#">Đặt khách sạn</a>
        <a href="#">Đặt vé máy bay</a>
        <a href="#">Săn hàng tồn</a>
        <a href="#">Khuyến Mãi HOT</a>
        <a href="#">Vé xem phim CGV</a>
        <a href="#">Mua hàng nước ngoài</a>
        <a href="#">Bán hàng cùng Tiki</a>
    </div>
    <header class="header">
        <div class="logo">
            <img src="./lab02/images/Logo_Tiki_2023.png" alt="Logo">
            <span>Thử ngay TikiNOW</span>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Tìm sản phẩm, danh mục hay thương hiệu...">
            <button>Tìm kiếm</button>
        </div>
        <div class="nav-links">
            <a href="#"><img src="./lab02/images/notification.png" alt="Notify">Thông báo của tôi</a>
            <a href="#"><img src="./lab02/images/user.png" alt="User">Đăng nhập <br> Tài khoản</a>
            <a href="#"><img src="./lab02/images/shopping-cart.png" alt="Cart">Giỏ hàng <span>0</span></a>
        </div>
    </header>
    <div class="sub-nav">
        <a href="#">DANH MỤC SẢN PHẨM</a>
        <a href="#">Bạn muốn giao hàng tới đâu?</a>
        <a href="#">Sản phẩm bạn đã xem</a>
        <a href="#">Theo dõi đơn hàng</a>
        <a href="#">Tất cả sản phẩm 100% chính hiệu</a>
        <a href="#">30 ngày đổi trả dễ dàng</a>
    </div>
