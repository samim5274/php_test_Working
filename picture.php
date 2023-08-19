<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mystore";

    $connection = new mysqli($servername,$username,$password,$database);

    if(isset($_POST["btnSubmit"]))
    {
        $file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $query = "INSERT INTO pictureinfo(image) VALUES ('$file')";
        if(mysqli_query($connection, $query))
        {
            echo '<script>alert("Inserted into Database")</script>';
        }
    }


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
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <input type="submit" name="btnSubmit" id="btnSubmit" class="btn-primary form-control" value="Upload">
            </form>
        </div>
    </div>

    <table class="table">
        <tr>
            <th>Image</th>
        </tr>
        <?php
            $query = "SELECT * FROM pictureinfo ORDER  BY id DESC";
            $result = mysqli_query($connection,$query);
            while($row = mysqli_fetch_array($result))
            {
                echo '
                <tr>
                    <td>
                        <img src="data:image/jpeg;base64,'.base64_encode($row['name']).'" />
                    </td>
                </tr>
                ';
            }
        ?>
        
    </table>

    <script>
        $(document).ready(function(){
            $('#btnSubmit').click(function(){
                var image_name = $('#image').val();
                if(image_name == '')
                {
                    alert("Please select image");
                    return false;
                }
                else
                {
                    var extension = $('#image').val().split('.').toLowerCase();
                    if(jQeuery.inArray(extension , ['gif','png','jpg','jpeg'])== -1)
                    {
                        aleert('Invalid image file');
                        $('#image').val('');
                        return false;

                    }
                }
            });
        });
    </script>
    
</body>
</html>