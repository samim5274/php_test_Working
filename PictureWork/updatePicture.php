<?php session_start();  ?>

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
                <h1 class="display-4  py-4">Update Picture</h1>
                <?php if((isset($_GET['error']))): ?>
                    <p><?php echo $_GET['error']; ?></p>          
                <?php endif ?>
            </div>
        </div>

    <div class="container">
    <?php    

        include "PDB.php" ;

        $id = $_GET['id'];

        $query = "SELECT * FROM pictureinfo WHERE id = '$id'";

        $query_result = mysqli_query($connection, $query);

        if(mysqli_num_rows($query_result) > 0)
        {
            foreach($query_result as $row)
            {
                ?>
            <form action="updatePictureBack.php" method="post" enctype="multipart/form-data">
                <div class="form-group">   
                    <label for="id" >Your updatable ID</label>
                    <input type="text" value="<?php echo $row['id']; ?>" name="id" id="id" class="form-control" placeholder="Please select the item" disabled ><br>
                    <label for="name" >Your name</label>
                    <input type="text" value="<?php echo $row['name']; ?>" name="fileName" id="name" class="form-control" placeholder="type you name" ><br>
                    <label for="remark" >Remarks</label>
                    <input type="text" value="<?php echo $row['Remark']; ?>" name="remark" id="remark" class="form-control" placeholder="remark" ><br>

                    <label for="image" >Select image file</label>
                    <input type="file" name="my_image" id="image" class="form-control" ><br>
                    <input type="hidden" name="image_old" value="<?php echo $row['image']; ?>">

                    <img src="<?php echo "Pic/".$row['image']; ?>" width="100px" alt="not found!">

                    <input type="submit" name="btnInsert" id="btnEdit" class="btn btn-primary form-control" value="Edit">
                    <br><br>
                </div>
            </form>
                <?php
            }
        }
        else
        {
            echo "No record found";
        }


        ?>
    </div>

    <div class="container">        
        
    </div>

        

</body>
</html>