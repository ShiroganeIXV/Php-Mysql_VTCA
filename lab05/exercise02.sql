USE php_mysql_crud;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    size VARCHAR(50),
    ram VARCHAR(50),
    storageMemory VARCHAR(50),
    new_price VARCHAR(50),
    old_price VARCHAR(50),
    discount VARCHAR(50),
    image_url VARCHAR(255),
    note TEXT
);

INSERT INTO products (name, size, ram, storageMemory, new_price, old_price, discount, image_url, note) VALUES
('iPhone 14 Pro Max 128GB | Chính hãng VN/A', '6.7 inches', '6 GB', '128 GB', '29.490.000 ₫', '34.990.000 ₫', 'Giảm 16%', 'https://via.placeholder.com/150', 'Thu cũ lên đời - Trợ giá 1 triệu'),
('OPPO Reno8', '6.4 inches', '8 GB', '256 GB', '7.850.000 ₫', '8.890.000 ₫', 'Giảm 13%', 'https://via.placeholder.com/150', 'Tăng thêm dịch vụ bảo hành Vip 12 tháng 1 đổi 1 và 1 km khác'),
('iPhone 11 64GB | Chính hãng VN/A', '6.1 inches', '4 GB', '64 GB', '11.190.000 ₫', '14.990.000 ₫', 'Giảm 25%', 'https://via.placeholder.com/150', '[HOT] Thu cũ lên đời giá cao - Thủ tục nhanh - Trợ giá lên tới...'),
('iPhone 13 128GB | Chính hãng VN/A', '6.1 inches', '4 GB', '128 GB', '17.990.000 ₫', '24.990.000 ₫', 'Giảm 28%', 'https://via.placeholder.com/150', 'Thu cũ lên đời - Trợ giá 1 triệu'),
('iPhone 13 Pro Max 128GB | Chính hãng VN/A', '6.7 inches', '6 GB', '128 GB', '27.190.000 ₫', '34.990.000 ₫', 'Giảm 22%', 'https://via.placeholder.com/150', 'Thu cũ lên đời - Trợ giá 1 triệu'),
('iPhone 14 Pro Max 256GB | Chính hãng VN/A', '6.7 inches', '6 GB', '256 GB', '31.490.000 ₫', '37.990.000 ₫', 'Giảm 17%', 'https://via.placeholder.com/150', 'Thu cũ lên đời - Trợ giá 1 triệu'),
('iPhone 14 128GB | Chính hãng VN/A', '6.1 inches', '6 GB', '128 GB', '19.990.000 ₫', '24.990.000 ₫', 'Giảm 20%', 'https://via.placeholder.com/150', 'No additional note'),
('Samsung Galaxy S22 Ultra (8GB - 128GB)', '6.8 inches', '8 GB', '128 GB', '23.090.000 ₫', '30.990.000 ₫', 'Giảm 25%', 'https://via.placeholder.com/150', 'Tăng Sạc Samsung 45W khi cáp C to C trị giá 1.190.000 ₫'),
('Samsung Galaxy Z Fold4', '7.6 inches', '12 GB', '256 GB', '34.290.000 ₫', '40.990.000 ₫', 'Giảm 16%', 'https://via.placeholder.com/150', 'Tặng gói SC+ 6 tháng và 3 km khác'),
('iPhone 11 128GB | Chính hãng VN/A', '6.1 inches', '4 GB', '128 GB', '12.790.000 ₫', '16.990.000 ₫', 'Giảm 25%', 'https://via.placeholder.com/150', '[HOT] Thu cũ lên đời giá cao - Thủ tục nhanh - Trợ giá lên tới...');
