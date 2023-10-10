<?php include 'dmtdb.php' ?>
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
            <h2 class="text-center mb-4">All Person Account</h2><br><br>
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
</section><br><hr>


<!-- <div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-bordered text-center">
                <thead>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Mill</th>
                    <th>Mill Rate</th>
                    <th>Cost</th>
                    <th>Diposit</th>
                    <th>Available</th>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Shamim Hossain</td>
                        <td>50</td>
                        <td>40.20</td>
                        <td>2010</td>
                        <td>2400</td>
                        <td>390</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> -->

<div class="continer">
    <h2><?php 
    if(isset($_POST['btnFilter']))
            {
                //total mill
                $startDate = $_POST['startDate'];
                $endDate = $_POST['endDate'];
                $totalMoney = "SELECT sum(Mill) FROM `tb_milldetail`WHERE Date BETWEEN '$startDate' AND '$endDate'";
                $sumResult = $conn->query($totalMoney);
                while($row = mysqli_fetch_array($sumResult))
                {
                    ?><h5 class="text-center my-4">Total Mill : <?php echo $totalMill = $row['sum(Mill)']; ?>/- </h5><?php
                    // echo "Total : ".$row['sum(Amount)'];
                }
                //total expenses
                $totalMoney = "SELECT sum(Amount) FROM `tb_expenses`WHERE Date BETWEEN '$startDate' AND '$endDate'";
                $sumResult = $conn->query($totalMoney);
                while($row = mysqli_fetch_array($sumResult))
                {
                    ?><h5 class="text-center my-4">Total Expenses $ : <?php echo $totalExpenses = $row['sum(Amount)']; ?>/- </h5><?php
                    // echo "Total : ".$row['sum(Amount)'];
                }
                //total diposit money
                $totalDipositMoney = "SELECT sum(Amount) FROM `tb_diposit_money`WHERE Date BETWEEN '$startDate' AND '$endDate'";
                $sumResult = $conn->query($totalDipositMoney);
                while($row = mysqli_fetch_array($sumResult))
                {
                    ?><h5 class="text-center my-4">Total Money Diposit $ : <?php echo $totalDAmount = $row['sum(Amount)']; ?>/- </h5><?php
                    // echo "Total : ".$row['sum(Amount)'];
                }

                $millRate = number_format($totalExpenses/$totalMill,2);
            }
                        
            ?></h2>
</div>



<section>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered text-center">
                    <thead>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Mill</th>
                        <th>Mill Rate</th>
                        <th>Cost</th>
                        <th>Diposit</th>
                        <th>Available</th>
                    </thead>
                    <tbody>

                    
        <?php
            
            if(isset($_POST['btnFilter']))
            {
                
                $result = mysqli_query($conn,"SELECT * FROM `tb_std_info`");
                if(mysqli_num_rows($result)>0) 
                {
                    $i=1;
                    foreach($result as $value)
                    {?>
                        <tr>
                            <td><?=$i; ?></td>
                            <td><?= $name = $value['Name']?></td>
                            <?php

                                if(isset($_POST['btnFilter']))
                                {
                                    $sqlTotalDiposit = "SELECT sum(Amount) FROM `tb_diposit_money`WHERE D_Name LIKE '$name' AND Date BETWEEN '$startDate' AND '$endDate'";
                                    $sumResultCC = $conn->query($sqlTotalDiposit);
                                    while($row = mysqli_fetch_array($sumResultCC))
                                    {
                                        ?><?php $totalDAmount2= $row['sum(Amount)']; ?><?php
                                    }

                                    $totalMill2 = "SELECT sum(Mill) FROM `tb_milldetail`WHERE Name LIKE '$name' AND Date BETWEEN '$startDate' AND '$endDate'";
                                    $sumResultMill = $conn->query($totalMill2);
                                    while($row = mysqli_fetch_array($sumResultMill))
                                    {
                                        ?><?php $totalMillCC = $row['sum(Mill)']; ?><?php
                                    }

                                    $totalCost = $totalMillCC * $millRate;
                                    $avilableAmount = $totalDAmount2 - $totalCost;

                                }
                                
                            ?>
                            <td><?=$totalMillCC?></td>
                            <td><?=$millRate?></td>
                            <td><?=$totalCost?></td>
                            <td><?=$totalDAmount2?></td>
                            <td><?=$avilableAmount?></td>
                        </tr>
                <?php  $i++;  }
                    
                }
            }
        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!--php filter name and date wise-->

<!-- <?php

    if(isset($_POST['btnFilter']))
            {
                $sqlTotalDiposit = "SELECT sum(Amount) FROM `tb_diposit_money`WHERE D_Name LIKE '$name' AND Date BETWEEN '$startDate' AND '$endDate'";
                $sumResultCC = $conn->query($sqlTotalDiposit);
                while($row = mysqli_fetch_array($sumResultCC))
                {
                    ?><h5 class="text-center my-4">L Total Money Diposit $ : <?php echo $row['sum(Amount)']; ?>/- </h5><?php
                    // echo "Total : ".$row['sum(Amount)'];
                }
            }
?> -->


</body>
</html>