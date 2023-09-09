<?php    include 'PDB.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Insert Image</title>
</head>
<body>


    <div class="container">
        <div class="row text-center">
            <h1 class="display-4  py-4">Insert Picture</h1> 
            <?php if((isset($_GET['error']))): ?>
                <p><?php echo $_GET['error']; ?></p>          
            <?php endif ?>                 
        </div>
    </div>

    

    <div class="container">        
        <form action="insertPictureBack.php" method="post" enctype="multipart/form-data">
            <div class="form-group">   
                <label for="name" >Your name</label>
                <input type="text" name="fileName" id="name" class="form-control" placeholder="type you name" ><br>
                <label for="image" >Select image file</label>
                <input type="file" name="my_image" id="image" class="form-control" ><br>
                <label for="remark" >Remarks</label>
                <input type="text" name="remark" id="remark" class="form-control" placeholder="remark" ><br>
                <input type="submit" name="btnInsert" id="btnInsert" class="btn btn-primary form-control" value="Save">
            </div>
        </form>
    </div>

<br><br><br><br>


    <div class="container">
        <table class="table">
            <tr>
                <td>#</td>
                <td>Id</td>
                <td>Name</td>
                <td>Remark</td>
                <td>Image</td>
            </tr>
            <?php             
                $images = mysqli_query($connection, "SELECT * FROM pictureinfo");
                $i = 1;
                foreach($images as $img):
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $img['id']; ?></td>
                <td><?php echo $img['name']; ?></td>
                <td><?php echo $img['Remark']; ?></td>
                <td><img class="img-fluit" src="Pic/<?php echo $img['image']; ?>" alt="Not found" width="200px"></td>
                <td><a class="btn btn-info btn-sm" href="updatePicture.php?id=<?php echo $img['id']; ?>">Edit</a></td>
            </tr>

            <?php endforeach; ?>

        </table>
    </div>



</body>
</html>