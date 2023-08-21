<?php include "img_db_conn.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Picture save layout</title>
    <style>
        .alb{
            width: 200px;
            height: 200px;
            padding: 5px;
        }
        .alb img {
            width: 100%;
            height: 100%;
        }
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="container"><br>
            <div class="wrapper">
                <?php if(isset($_GET['error'])):  ?>
                    <p><?php echo $_GET['error']; ?></p>
                <?php endif?>
                <form action="imageInsert.php" method="post" enctype="multipart/form-data">
                    <div class="from-group">
                        <label for="image">Select image file:</label>
                        <input type="file" name="my_image" id="image" class="form-control">
                    </div>
                    <input type="submit" name="btnSubmit" id="btnSubmit" class="btn-primary form-control" value="Upload">
                </form>
            </div>
        </div>
    </div>


    <!--======================= Image show table ==============================-->
    <br><br><br><br><br>
        <div class="container">
            <table class="table">
                <tr>
                    <td>#</td>
                    <td>Id</td>
                    <td>Image</td>
                </tr>
                <?php
                    
                    $images = mysqli_query($connection, "SELECT * FROM images");
                    $i = 1;
                    foreach($images as $image) :
                    
                ?>

                <tr>
                    <td>
                        <?php echo $i++; ?>
                    </td>
                    <td>
                        <?php echo $image["id"] ?>
                    </td>
                    <td><img src="upload/<?php echo $image['image_url']; ?>" width="200"></td>
                </tr>

                <?php endforeach; ?>
                
            </table>
        </div>
    <br><br><br><br><br>
    
    <div class="container">
        <a href="picture.php">&#8591;</a>
        <?php
            $sql = "SELECT * FROM images ORDER BY id DESC";
            $result = mysqli_query($connection, $sql);
            if(mysqli_num_rows($result)>0)
            {
                while($images = mysqli_fetch_assoc($result))
                {?>
                    <div class="alb">
                        <img src="upload/<?=$images['image_url']?>" alt="Wait for picture">
                    </div>
            <?php    }
            }
        ?>
    </div>
    
</body>
</html>