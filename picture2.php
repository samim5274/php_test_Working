<?php include"db.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
    <title>Picture save</title>
</head>
<body>
    <div class="container">
        <form action="insertPicture2.php" method="post" enctype="multipart/form-data">
            <div class="form-group">   
                <label for="name" >Your name</label>
                <input type="text" name="fileName" id="name" class="form-control" placeholder="type you name" ><br>
                <label for="image" >Select image file</label>
                <input type="file" name="my_image" id="image" class="form-control" ><br>
                <label for="remark" >Remarks</label>
                <input type="text" name="remark" id="remark" class="form-control" placeholder="remark" ><br>
                <input type="submit" name="btnSubmit" id="btnSubmit" class="btn btn-primary form-control" value="Upload">
            </div>
        </form>
    </div>
    
</body>
</html>