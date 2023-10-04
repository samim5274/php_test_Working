<?php include 'dmtdb.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Money Filter - DMT</title>
</head>
<body>

<section> <form action="" method="POST">
    <div class="container">
        <div class="row mt-4">
            <h2 class="text-center mb-4">Filter Diposit Money</h2><br><br>
            <div class="col-md-3">
                <div class="form-group">
                    <input type="date" name="startDate" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <input type="date" name="endDate" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <input type="submit" name="btnFilter" class="btn btn-info form-control" value="Search">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <a href="index.php"><input class="btn btn-warning form-control" value="Back"></a>
                </div>
            </div>
        </div>
    </div></form>
</section><br>


<section>
    <div class="container">

        <div class="row">
            <div class="col-md-12 overflow-auto" style="max-width: 100%; max-height: 650px;">
                <table class="table table-bordered text-center">
                    <thead>
                        <th>SL</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Purpose</th>
                    </thead>
                    <tbody>

                    
        <?php
            $sqlShow = "SELECT * FROM `tb_diposit_money`";
            $showResult = mysqli_query($conn,$sqlShow);

            if(isset($_POST['btnFilter']))
            {
                $startDate = $_POST['startDate'];
                $endDate = $_POST['endDate'];

                $result = mysqli_query($conn,"SELECT * FROM `tb_diposit_money` WHERE Date BETWEEN '$startDate' AND '$endDate'");
                if(mysqli_num_rows($result)>0) 
                {
                    $i=1;
                    foreach($result as $value)
                    {?>
                        <tr>
                            <td><?=$i; ?></td>
                            <td><?=$value['Date']?></td>
                            <td><?=$value['D_Name']?></td>
                            <td><?=$value['Amount']?></td>
                            <td><?=$value['Purpose']?></td>
                        </tr>
                <?php  $i++;  }
                    
                }
            }
            if(isset($_POST['btnFilter']))
            {
                $totalDipositMoney = "SELECT sum(Amount) FROM `tb_diposit_money`WHERE Date BETWEEN '$startDate' AND '$endDate'";
                $sumResult = $conn->query($totalDipositMoney);
                while($row = mysqli_fetch_array($sumResult))
                {
                    ?><h5 class="text-center my-4">Total Money Diposit $ : <?php echo $row['sum(Amount)']; ?>/- </h5><?php
                    // echo "Total : ".$row['sum(Amount)'];
                }
            }
        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


</body>
</html>