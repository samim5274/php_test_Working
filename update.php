<?php

    
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "mystore";

                $id = "";
                $fname = "";
                $lname = "";
                $email = "";
                $phone = "";
                $address = "";

                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                                
                try{
                    $connection = new mysqli($servername,$username,$password,$database);
                }
                catch(Exception $ex)
                {
                    echo '404 Error';
                }

                function getposts() 
                {
                    $posts = array();
                    $posts[0] = $_POST['id'];
                    $posts[1] = $_POST['first_name'];
                    $posts[2] = $_POST['last_name'];
                    $posts[3] = $_POST['email'];
                    $posts[4] = $_POST['phone'];
                    $posts[5] = $_POST['address'];
                    return $posts;
                }
                
            //search code here ==========================================

                if (isset($_POST['search'])) 
                {
                    $data = getPosts();
                    $search_Query = "SELECT * FROM employees WHERE id = $data[0]";

                    $search_Result = mysqli_query($connection, $search_Query);

                    if ($search_Query)
                    {
                        if (mysqli_num_rows($search_Result))
                        {
                            while ($rows = mysqli_fetch_array($search_Result))
                            {
                                $id=$rows['id'];
                                $fname=$rows['first_name'];
                                $lname=$rows['last_name'];
                                $email=$rows['email'];
                                $phone=$rows['phone'];
                                $address=$rows['address'];
                                echo 'Data is found.';
                            }
                        }
                        else
                        {
                            echo 'No data found by this id';
                        }
                    }
                    else
                        {
                            echo '404 error.';
                        }
                }
            
            //update code here ==========================================


            if (isset($_POST['update']))
            {
                $data = getposts();
                $update_Query = "UPDATE `employees` SET `first_name`='$data[1]',`last_name`='$data[2]',`email`='$data[3]',`phone`=$data[4],`address`='$data[5]' WHERE `id` = $data[0]";

                try {
                    $update_Result = mysqli_query($connection, $update_Query);

                    if ($update_Result)
                    {
                        if (mysqli_affected_rows($connection)>0)
                        {
                            echo 'Data updated successfully.';
                        }
                        else
                        {
                            echo '804 data update not possible. Try again';
                        }
                    }

                  } catch (Exception $ex) {
                    echo 'Data update code not working properly.'.$ex->getMessage();
                  }
            }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <div class="table"><br><br>
            <form action="update.php" method="post">
                <input type="text" name="id" placeholder="search" value="<?php echo $id;?>"> <button name="search" class="btn btn-primary btn-sm">search</button> <br><br>

                New First Name: <input type="text" name="first_name" placeholder="first name" value="<?php echo $fname; ?>"> <br><br>
                New last Name: <input type="text" name="last_name" placeholder="last name" value="<?php echo $lname; ?>"> <br><br>
                New email: <input type="email" name="email" placeholder="example@email.com" value=" <?php echo $email; ?>"> <br><br>
                New phone: <input type="number" name="phone" placeholder="+880 " value="<?php echo $phone; ?>"> <br><br>                
                Address: <input type="text" name="address" placeholder="Address" value="<?php echo $address; ?>"><br><br>
                <button class="btn btn-warning btn-sm" name="update" >Update</button>
            </form>
        </div>
    </div>


    <div class="container">
        
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $fname; ?></td>
                    <td><?php echo $lname; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $phone; ?></td>
                    <td><?php echo $address; ?></td>
                </tr>
            </table>
    </div>
</body>
</html>