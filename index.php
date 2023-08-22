<?php

    $conn = mysqli_connect("localhost","root","","mystore");
    $count = 0;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inser value php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



    <center><h2>list of stuent</h2></center>
    <div class="container">
        <div class="table"><br><br>
            <table>
                <form action="insert.php" method="post">
                    <tr>
                        <th>First Name</th>
                        <td><input type="text" name="fname" placeholder="Firstname"></td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td><input type="text" name="lname" placeholder="Last name"></td>
                    </tr>
                    <tr>
                        <th>Divition</th>
                        <td>
                            <select name="div">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submite">Save</button></td>
                    </tr>
                </form>
                <button class="btn btn-warning" ><a href="addStudentInfo.php">Add Student</a></button>
            </table>
        </div>




        <div class="table">
            <table>
                <tr>
                    <th>Enrollment</th>
                    <th>Name</th>
                    <th>Division</th>
                </tr>

                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "mystore";

                $connection = new mysqli($servername,$username,$password,$database);

                if ($connection->connect_errno)
                {
                    die("Connection faild: " . $connection->connect_errno);
                }

                $sql = "SELECT * FROM LIST";
                $result = $connection->query($sql);

                if (!$result){
                    die("Invalid query: " . $connection->connect_errno);
                }



                while($row = $result->fetch_assoc()) {
                    $count++;
                    echo "<tr>
                        <td>".$row["en_no"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["division"]."</td>
                        <tr>

                    </tr>
                </tr>";
                }


                //col number sum code ===============================

                $sql = "SELECT  SUM(en_no) from list";
                $result = $connection->query($sql);
                while($row = mysqli_fetch_array($result)){
                    echo " Total Enrollment: ". $row['SUM(en_no)'];
                    echo "<br>";
                }

                ?>

                <div class="table count">
                    <div> <?php echo $count; ?> student</div>
                </div>

               <a class='btn btn-primary btn-sm' href='search.php'>Search</a>
               <a class='btn btn-warning btn-sm' href='update.php'>Update</a>
               <a class='btn btn-danger btn-sm' href='delete.php'>Delete</a>
               <a class='btn btn-success btn-sm' href='picture.php'>Image</a>
               <a class='btn btn-success btn-sm' href='picture2.php'>Image2</a>

            </table>
        </div>
        <button class="btn btn-primary btn-sm" onclick="history.go(-1)">Home</button>
    </div>


</body>
</html>
