<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/293048c406.js" crossorigin="anonymous"></script>
<style>
    .container{
        margin-top: 30px;
    }
    .icon-container{
        display: flex;
        justify-content: space-around;
    }
    .table-container {
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        border-radius: 8px;
        overflow: hidden;
    }
    .table-header {
        background-color: #2c3e50;
        color: #fff;
        padding: 10px 20px;
    }
    .table-header h2 {
        margin: 0;
        font-size: 24px;
    }
    .table-header .btn {
        margin-left: 10px;
    }
    .table thead {
        background-color: #f8f9fa;
    }
    .table tbody tr {
        vertical-align: middle;
    }
</style>


<?php
    $servername = "localhost";
    $username = "root";
    $password = "jb9faqmu";
    $dbname = "php_mysql_crud";

    //? Create database
    // $sql = "CREATE DATABASE php_mysql_crud";
    // if ($conn->query($sql) === TRUE) {
    //   echo "Database created successfully";
    // } else {
    //   echo "Error creating database: " . $conn->error;
    // }

    //? Create table
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // $sql = "CREATE TABLE Lab05 (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     fullname VARCHAR(30) NOT NULL,
    //     email VARCHAR(50) NOT NULL,
    //     home_address VARCHAR(200),
    //     phone_number VARCHAR(15)
    //     )";
        
    // if ($conn->query($sql) === TRUE) {
    //     echo "Table Lab05 created successfully";
    // } else {
    //     echo "Error creating table: " . $conn->error;
    // }

    //? Insert multiple data
    // $sql = "INSERT INTO Lab05 (fullname, email, home_address,phone_number)
    // VALUES ('Thomas Hardy', 'thomashardy@mail.com', '89 Chiaroscuro Rd, Portland, USA','(171) 555-2222');";
    // $sql .= "INSERT INTO Lab05 (fullname, email, home_address,phone_number)
    // VALUES ('Dominique Perrier', 'dominiqueperrier@mail.com', 'Obere Str. 57, Berlin, Germany','(313) 555-5735');";
    // $sql .= "INSERT INTO Lab05 (fullname, email, home_address,phone_number)
    // VALUES ('Maria Anders', 'mariaanders@mail.com', '25, rue Lauriston, Paris, France','(503) 555-9931');";
    // $sql .= "INSERT INTO Lab05 (fullname, email, home_address,phone_number)
    // VALUES ('Fran Wilson', 'franwilson@mail.com', 'Araquil, 67, Madrid, Spain','(204) 619-5731');";
    // $sql .= "INSERT INTO Lab05 (fullname, email, home_address,phone_number)
    // VALUES ('Martin Blank', 'martinblank@mail.com', 'Via Monte Bianco 34, Turin, Italy','(430) 631-2097');";


    // if ($conn->multi_query($sql) === TRUE) {
    //   echo "New records created successfully";
    // } else {
    //   echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    
    //? Select data
    // $sql = "SELECT id, firstname, lastname FROM Lab05";
    // $result = $conn->query($sql);

    // if ($result->num_rows > 0) {
    // echo "<div class=\"table-responsive\"><table class=\"table table-striped\"><thead class=\"table-dark\"><tr><th scope=\"col\">ID</th><th scope=\"col\">Name</th></tr></thead>";
    // // output data of each row
    // while($row = $result->fetch_assoc()) {
    //     echo "<tbody><tr><th scope=\"row\">".$row["id"]."</th><td>".$row["firstname"]." ".$row["lastname"]."</td></tr></tbody>";
    // }
    // echo "</table></div>";
    // } else {
    // echo "0 results";
    // }


?>

<div class="container">
        <div class="table-container">
            <div class="table-header d-flex justify-content-between align-items-center">
                <h2>Manage <strong>Employees</strong></h2>
                <div>
                    <button class="btn btn-danger">Delete</button>
                    <button class="btn btn-success">Add New Employee</button>
                </div>
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col"><input type="checkbox"></th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT id, fullname, email, home_address, phone_number FROM Lab05";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td><input type='checkbox'></td>
                                        <td>" . $row["fullname"]. "</td>
                                        <td>" . $row["email"]. "</td>
                                        <td>" . $row["home_address"]. "</td>
                                        <td>" . $row["phone_number"]. "</td>
                                        <td class='icon-container'>
                                            <i class='fa-solid fa-pen' style='color: #FFD43B;'></i>
                                            <i class='fa-solid fa-trash' style='color: #ff000d;'></i>
                                        </td>
                                    </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6' class='text-center'>No employees found</td></tr>";
                        }
                        $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta3/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>

