<?php include 'PDB.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Index 2</title>
</head>
<body>
    

    <div class="container">
        <div class="row text-center">
            <h1 class="display-4  py-4">Picture information</h1>
            <div class="col-4 mt-4">
                <form action="insertPicture.php" method="post">
                    <button class="btn btn-success btn-sm">Insert Img</button>
                </form>
            </div>
            <div class="col-4 mt-4">
                <form action="updatePicture.php" method="post">
                    <button class="btn btn-info btn-sm">Update Img</button>
                </form>                
            </div>
            <div class="col-4 mt-4">
                <form action="deletePicture.php" method="post">
                    <button class="btn btn-danger btn-sm">Delete Img</button>
                </form>                
            </div>
        </div>
    </div>




</body>
</html>