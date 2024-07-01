<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "jb9faqmu";
$dbname = "php_mysql_crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-4">

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="bg-white p-4 rounded-lg shadow-lg">';
            echo '    <div class="relative">';
            echo '        <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">' . $row["discount"] . '</span>';
            echo '        <img src="' . $row["image_url"] . '" alt="Product Image" class="w-full h-48 object-cover rounded-lg">';
            echo '    </div>';
            echo '    <h2 class="text-lg font-semibold mt-2">' . $row["name"] . '</h2>';
            echo '    <div class="flex items-center space-x-2 text-sm text-gray-500 mt-1">';
            echo '        <span>' . $row["size"] . '</span>';
            echo '        <span>' . $row["ram"] . '</span>';
            echo '        <span>' . $row["storageMemory"] . '</span>';
            echo '    </div>';
            echo '    <div class="text-red-500 font-bold text-xl mt-2">' . $row["new_price"] . '</div>';
            echo '    <div class="text-gray-500 text-sm line-through">' . $row["old_price"] . '</div>';
            echo '    <div class="text-sm text-gray-500 mt-1">' . $row["note"] . '</div>';
            echo '    <div class="flex items-center mt-2">';
            echo '        <div class="flex items-center text-yellow-400">';
            echo '            <span>★★★★★</span>';
            echo '        </div>';
            echo '        <button class="ml-auto text-red-500"><i class="far fa-heart"></i> Yêu thích</button>';
            echo '    </div>';
            echo '</div>';
        }
    } else {
        echo "No products found.";
    }
    $conn->close();
    ?>
</div>

</body>
</html>