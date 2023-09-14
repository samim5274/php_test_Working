<?php include 'dmtdb.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Diposit Money-DMT</title>
</head>
<body>


<div class="container mt-2">
    <div class="row">
        <div class="col-md-4">
            <select class="form-select">
            <?php 
                $sql = "SELECT * FROM tb_std_info";
                $result = mysqli_query($conn,$sql);
                ?><option selected disabled>Select name</option><?php
                while($row = mysqli_fetch_array($result)){?>
                    
                    <option value="<?php echo $row['Id'];?>"><?php echo $row['Name'];?></option>
            <?php    }?>
            </select>
        </div>
        <div class="col-md-4">
            <select class="form-select">
            <?php 
                $sql = "SELECT * FROM tb_std_info";
                $result = mysqli_query($conn,$sql);
                ?><option selected disabled>Select name</option><?php
                while($row = mysqli_fetch_array($result)){?>
                    
                    <option value="<?php echo $row['Id'];?>"><?php echo $row['Name'];?></option>
            <?php    }?>
            </select>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="submit" name="btnDipositMoney" class="btn btn-info form-control" value="Save">
            </div>
        </div>
    </div>
</div>
    
</body>
</html>