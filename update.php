<?php

    if (isset($_POST['update']))
    {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "mystore";
                
                $connection = new mysqli($servername,$username,$password,$database);

                $id = $_POST['id'];
                $fname = $_POST['first_name'];
                $lname = $_POST['last_name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];

                $query = "UPDATE `employees` SET `first_name`='".$fname."',`last_name`='".$lname."',`email`='".$email."',`phone`=$phone,`address`='".$address."' WHERE 'id' = $id";

                $result = mysqli_query($connection, $query);

                if ($result)
                {
                    echo 'Data update';
                }
                else {
                    echo 'Data not update';
                }
                mysqli_close($connection);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <h1>Update form</h1>

        <div class="table"><br><br>
            <form action="update.php" method="post">
                ID : <input type="text" name="id" placeholder="ID" required>
                New First Name: <input type="text" name="first_name" placeholder="first name" required> <br><br>
                New last Name: <input type="text" name="last_name" placeholder="last name" required> <br><br>
                New email: <input type="email" name="email" placeholder="example@email.com" required> <br><br>
                New phone: <input type="number" name="phone" placeholder="+880 1***********" required> <br><br>
                New address: <input type="text" name="address" placeholder="address" required> <br><br>
                <button class="btn btn-warning btn-sm" name="update" value="update">Update</button>
            </form>
        </div>
    </div>


</body>
</html>