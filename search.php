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

    try {
        $connection = new mysqli($servername,$username,$password,$database);
    }
    catch(Exception $ex)
    {
        echo '404 Error.';
    }

    function getPosts()
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
    
    // search code here ============================================

    if (isset($_POST['search']))
    {
        $data = getPosts();

        $search_Query = "SELECT * FROM employees WHERE id = $data[0]";

        $search_Result = mysqli_query($connection, $search_Query);

        if ($search_Query)
        {
            if (mysqli_num_rows($search_Result))
            {
                while ($row = mysqli_fetch_array($search_Result))
                {
                    $id = $row['id'];
                    $fname = $row['first_name'];
                    $lname = $row['last_name'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $address = $row['address'];
                }
            }
            else 
            {
                echo 'no data found against this id';
            }
        }
        else 
        {
            echo '404 error.';
        }
    }


    // insert code heare =======================================================

    if (isset($_POST['insert']))
    {
        $data = getPosts();
        $insert_Query = "INSERT INTO `employees`(`first_name`, `last_name`, `email`, `phone`, `address`) VALUES ('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]')";

        try {
            $insert_Result = mysqli_query($connection, $insert_Query);
            if ($insert_Query)
            {
                if (mysqli_affected_rows($connection)>0)
                {
                    echo 'Data save successfully.';
                }
                else
                {
                    echo '804 error data not save.';
                }
            }
        }
        catch (Exception $ex)
        {
            echo 'no data found against this id'.$ex->getMessage();
        }
    }


    //delete code here ==================================================================

    if (isset($_POST['delete']))
    {
        $data = getPosts();
        $delete_Query = "DELETE FROM `employees` WHERE id = $data[0]";

        try {
            $delete_Result = mysqli_query($connection, $delete_Query);

            if ($delete_Result)
            {
                if (mysqli_affected_rows($connection)>0)
                {
                    echo 'Data delete successfully.';
                }
                else
                {
                    echo '804 error data not delete.';
                }
            }
        }
        catch (Exception $ex)
        {
            echo 'delete data not possible '.$ex->getMessage();
        }
    }

    // update code here ====================================================================

    if (isset($_POST['update']))
    {
        $data = getPosts();
        $update_Query = "UPDATE `employees` SET `first_name`='$data[1]',`last_name`='$data[2]',`email`='$data[3]',`phone`=$data[4],`address`='$data[5]' WHERE `id`=$data[0]";

        try {
            $update_Result = mysqli_query($connection, $update_Query);

            if ($update_Result)
            {
                if (mysqli_affected_rows($connection)>0)
                {
                    echo 'Data update successfully.';
                }
                else
                {
                    echo '804 error data not update.';
                }
            }
        }
        catch (Exception $ex)
        {
            echo 'Data code not working. '.$ex->getMessage();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1>search form</h1>

        <div class="table"><br><br>
            <form action="search.php" method="post">
                ID : <input type="number" name="id" placeholder="id" value="<?php echo $id; ?>"><button name="search">Search</button><br><br>

                New First Name: <input type="text" name="first_name" placeholder="first name"  value="<?php echo $fname; ?>"> <br><br>
                New last Name: <input type="text" name="last_name" placeholder="last name"  value="<?php echo $lname; ?>"> <br><br>
                New email: <input type="email" name="email" placeholder="example@email.com"  value="<?php echo $email; ?>"> <br><br>
                New phone: <input type="text" name="phone" placeholder="+880 1***********"  value="<?php echo $phone; ?>"> <br><br>
                New address: <input type="text" name="address" placeholder="address"  value="<?php echo $address; ?>"> <br><br>
                <div>
                    <button name="insert">Add</button>
                    <button name="update">Update</button>
                    <button name="delete">Delete</button>                    
                </div>
            </form>
        </div>
    </div>
</body>
</html>