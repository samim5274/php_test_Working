<?php include_once 'db.php';
$sql = "SELECT * FROM tb_student_info";
$run = mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
    <title>SP</title>
</head>
<body>



<section>
    <div class="container">
    <h2>Date Filter between two dates</h2><br><br>

    <form action="" method="post">
        <div class="col-lg-4">
            <div class="form-group">
                <input type="date" name="startDate" class="form-control">  
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <input type="date" name="endDate" class="form-control">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <input type="submit" name="btnSubmit" class="btn btn-info form-control">
            </div>
        </div>
    </form>

    <?php
        if(isset($_POST['btnSubmit']))
        {
            $startDate = $_POST['startDate'];
            $endDate = $_POST['endDate'];

            $result = mysqli_query($connection,"SELECT * FROM tb_student_info WHERE DateOfBirth BETWEEN '$startDate' AND '$endDate'");

            if(mysqli_num_rows($result)>0){?>
                
                        <div class="col-lg-12">
                            <table class="table table-striped">
                                <thead>
                                    <th>Name</th>
                                    <th>Date of Birth</th>
                                    <th>Phone</th>
                                </thead>
                                <tbody>
                                <?php foreach($result as $value){?>
                                    <tr>
                                        <td><?=$value['FirstName']?></td>
                                        <td><?=$value['DateOfBirth']?></td>
                                        <td><?=$value['Phone']?></td>
                                    </tr>
                                    <?php    }?>
                                </tbody>
                            </table>
                        </div>
            <?php    
            }
            else
            {
                echo "Data not found";
            }
        }else {
    ?>
    
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Phone</th>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                        while($row=mysqli_fetch_assoc($run)){
                            $name = $row['FirstName'];
                            $dateOfBirth = $row['DateOfBirth'];
                            $phone = $row['Phone'];
                        ?>
                            <tr>
                                <td><?=$i; ?></td>
                                <td><?=$name; ?></td>
                                <td><?=$dateOfBirth; ?></td>
                                <td><?=$phone; ?></td>
                            </tr>

                    <?php  $i++;  } ?>
                    

                </tbody>
                
            </table>
        </div>
        <?php } ?>
    </div>

    </div>
</section>
    
</body>
</html>