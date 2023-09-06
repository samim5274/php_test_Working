<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Image</title>
</head>
<body>

    <!-- <div class="container">
        <h1 class="display-4">
            Updating id = <?php echo $id = $_GET['id'];?>
        </h1>
    </div> -->

    <div class="container"><br>
    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "mystore";
        
        $connection = mysqli_connect($servername,$username,$password,$database);
        

        $query = "SELECT * FROM images WHERE id = '$id'";
        $query_result = mysqli_query($connection , $query);

        if(mysqli_num_rows($query_result) > 0)
        {
            foreach($query_result as $row)
            {
                echo $row['id'];
                echo ' ';
                echo $row['image_url'];
                ?>
                    <div class="wrapper">
                        <?php if(isset($_GET['error'])):  ?>
                            <p><?php echo $_GET['error']; ?></p>
                        <?php endif?>
                        <form action="code.php" method="post" enctype="multipart/form-data">
                            <div class="from-group">
                                <label for="image">Select image file:</label>
                                <input type="file" name="my_image" value="<?php echo $row['image_url'];?>" id="image" class="form-control" >
                                <input type="hidden" name="my_image_old" value="<?php echo $row['image_url'];?>">
                                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                            </div>
                            <input type="submit" name="btnEdit" id="btnEdit" class="btn-primary form-control" value="Edit">
                        </form>
                    </div>
                <?php
            }
        }
        else
        {
            echo "No record here!";
        }

    ?>
        
    </div>
    
</body>
</html>