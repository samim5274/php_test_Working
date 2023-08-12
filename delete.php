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
                    // $posts[1] = $_POST['first_name'];
                    // $posts[2] = $_POST['last_name'];
                    // $posts[3] = $_POST['email'];
                    // $posts[4] = $_POST['phone'];
                    // $posts[5] = $_POST['address'];
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

         //delete code here ==========================================

        if(isset($_POST['delete']))
        {
            $data = getposts();
            $delete_Query = "DELETE FROM `employees` WHERE id = $data[0]";

            try {
                $delete_Result = mysqli_query($connection, $delete_Query);
                if ($delete_Result)
                {
                    if(mysqli_affected_rows($connection)>0)
                    {
                        echo 'Data deleted successfully.';
                    }
                    else
                    {
                        echo 'Data not deleted.Try again!';
                    }
                }
            }
            catch (Exception $ex)
            {
                echo 'Data delete not possible.'.$ex->getMessage();
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
</head>
<body>
    
    <div class="container">
        <h1>Delete form</h1>
        
        <form action="delete.php" method="post">
            <input type="text" name="id" placeholder="Search" value="<?php echo $id;?>">
            <button class="btn btn-success btn-sm" name="search">Search</button>
            <button class="btn btn-warning btn-sm" onclick="function ClearText()">Clear</button>
            <button class="btn btn-danger btn-sm" onclick="function ClearText()" name="delete">Delete</button>
            <br><br>

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
        </form>
        <button class="btn btn-primary btn-sm" onclick="history.back()" href="index.php">Home</button>
    </div>

    <script type="text/javascript">
        function ClearText()
        {
            document.getElementById('id').value = "";
        }
    </script>
</body>
</html>