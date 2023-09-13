<?php include '../dmtdb.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
     <!--Filter code-->

<section>
    <form action="" method="post">
    <div class="container mb-4">
            <div class="row mt-4">
                <h2 class="text-center mb-4">Filter Student betowwn DOB</h2><br><br>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="date" name="startDate" class="form-control">
                    </div>
                </div><br>
                <div class="col-md-4">
                    <div class="form-group">
                            <input type="date" name="endDate" class="form-control">
                    </div>
                </div><br>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="submit" name="btnFilter" class="btn btn-info form-control" value="Filter">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--back end code here-->
    
</section>


<div class="container">
    <?php 
        $sqlShow = "SELECT * FROM tb_std_info";
        $showResult = mysqli_query($conn,$sqlShow);

    if(isset($_POST['btnFilter']))
    {
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        
        $result = mysqli_query($conn, "SELECT * FROM tb_std_info WHERE DateOfBirth BETWEEN '$startDate' AND '$endDate'");
        if(mysqli_num_rows($result)>0) 
        {?>
            <div class="col-md-12">
                <table class="table table-bordered text-center">
                    <thead>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Phone</th>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($result as $value)
                        {?>
                            <tr>
                                <td><?=$i;?></td>
                                <td><?=$value['Name']?></td>
                                <td><?=$value['DateOfBirth']?></td>
                                <td><?=$value['Gender']?></td>
                                <td><?=$value['Address']?></td>
                                <td><?=$value['Phone']?></td>
                            </tr>
                    <?php $i++;   }?>       
                    <?php
                        $TotalNum = "SELECT sum(Phone) FROM tb_std_info";
                        $sumResult = $conn->query($TotalNum);
                        while($row = mysqli_fetch_array($sumResult))
                        {
                            echo "Total : ".$row['sum(Phone)'];
                            echo"<br><br>";
                        }
                    ?>                 
                    </tbody>
                </table>
            </div>
    <?php    }
        else
        {
            echo "Data not found";
        }
    }

    ?>



</div>



</body>
</html>