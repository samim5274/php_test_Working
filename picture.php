<?php 

    include 'upload.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Picture save layout</title>
</head>
<body>

    <div class="container"><br>
        <div class="wrapper">

            <?php if(!empty($status))
                { ?>
                    <p class="status <?php echo $status;?> "><?php echo $statusMsg;?></p>
                <?php } 
            ?>

            <form action="" method="post" enctype="multipart/form-data">
                <div class="from-group">
                    <label for="image">Select image file:</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <input type="submit" name="submit" class="btn-primary form-control" value="Upload">
            </form>
        </div>
    </div>
    
</body>
</html>