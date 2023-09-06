<?php include "img_db_conn.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Delete PIcture</title>
</head>
<body>
    

    <div class="container">
        <table class="table">
            <tr>
                <td>SL</td>
                <td>ID</td>
                <td>Image</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            <?php
                $images = mysqli_query($connection, "SELECT * FROM images");
                $i = 1;
                foreach($images as $image) :
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $image["id"] ?></td>
                <td><img src="upload/<?php echo $image['image_url']; ?>" alt="not found!" width="100">

                <form action="code.php" method="post">
                    <input type="hidden" name="delet_id" value="<?php echo $image["id"] ?>">
                    <input type="hidden" name="imageDelet" value="<?php echo $image['image_url']; ?>">                    
                </form>

            </td>
                <td>                    
                    <a href="Edit.php?id=<?php echo $image["id"] ?>" class="btn btn-info">Edit</a>                    
                    <!-- <button type="submit" name="btnImgEdit" class="btn btn-info btn-sm m-3">Edit</button> -->                   
                </td>
                <td><button type="submit" name="btnImgDelet" class="btn btn-danger btn-sm m-3">Delete</button></td>
            <tr>
                
            <?php endforeach; ?>
        </table>
    </div>


    

</body>
</html>