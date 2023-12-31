<?php include 'dmtdb.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dormitory System</title>
</head>
<body>


<div class="container mt-2">
    <div class="row text-center">
        <h1 class="display-4">Dormitor System</h1>
        <div class="col">
        <a href="StudentInfo/std_info.php"><button class="btn btn-info ">Insert</button></a>            
        <a href="dipositMoney.php"><button class="btn btn-warning ">Money Diposit</button></a>          
        <a href="milDetail.php"><button class="btn btn-danger ">Mil</button> </a>           
        </div>
    </div>
    <div class="row my-4">
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">All Pages</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="StudentInfo/std_info.php">Student Information</a>
                <li class="page-item">
                    <a class="page-link" href="dipositMoney.php">Money Diposit</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="milDetail.php">Mil Details</a>
                </li>  
                <li class="page-item">
                    <a class="page-link" href="expenses.php">Expenses</a>
                </li>               
            </ul>
            <ul class="pagination">
                <li class="page-item disabled"><a class="page-link">All Filter</a></li>
                <li class="page-item"><a href="StudentInfo/filterStd.php" class="page-link">Student Filter</a></li>
                <li class="page-item"><a href="dipositMoneyFilter.php" class="page-link">Diposit Money Filter</a></li>
                <li class="page-item"><a href="millFilter.php" class="page-link">Mill Filter</a></li>
                <li class="page-item"><a href="expensesFilter.php" class="page-link">Expenses Filter</a></li>
                <li class="page-item"><a href="allPersonAccountHistory.php" class="page-link">Person Wise Mill History</a></li>
            </ul>
        </nav>
    </div>
</div>



    <!--Total Expenses and total mill and mill rate-->


    <section><form action="" method="POST">
        <div class="container">
            <div class="row text-center my-4">
                <h4 class="display-4">Total Expenses and Total Mill and Mill Rate</h4>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="date" name="startDate" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="date" name="endDate" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="submit" name="btnFilter" class="btn btn-info form-control" value="Search">
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php
                        
                        if(isset($_POST['btnFilter']))
                        {
                            $startDate = $_POST['startDate'];
                            $endDate = $_POST['endDate'];

                            $totalMoney = "SELECT sum(Mill) FROM `tb_milldetail`WHERE Date BETWEEN '$startDate' AND '$endDate'";
                            $sumResult = $conn->query($totalMoney);
                            while($row = mysqli_fetch_array($sumResult))
                            {
                                ?><p>Total Mill $ : </p><h1 class="text-center my-4"><?php echo $totalMill = $row['sum(Mill)']; ?> </h1><?php
                                // echo "Total : ".$row['sum(Amount)'];
                            }
                        }
                    ?>
                </div>
                <div class="col-md-4">
                    <?php
                        
                        if(isset($_POST['btnFilter']))
                        {
                            $startDate = $_POST['startDate'];
                            $endDate = $_POST['endDate'];
                            
                            $totalMoney = "SELECT sum(Amount) FROM `tb_expenses`WHERE Date BETWEEN '$startDate' AND '$endDate'";
                            $sumResult = $conn->query($totalMoney);
                            while($row = mysqli_fetch_array($sumResult))
                            {
                                ?><p>Total Expenses $ : </p><h1 class="text-center my-4"><?php echo $totalEAmount = $row['sum(Amount)']; ?>/- </h1><?php
                                // echo "Total : ".$row['sum(Amount)'];
                            }
                        }
                    ?>
                </div>
                <div class="col-md-4">
                    <?php
                        
                       if(isset($_POST['btnFilter']))
                       {
                           $totalDMoney = "SELECT sum(Amount) FROM `tb_diposit_money`WHERE Date BETWEEN '$startDate' AND '$endDate'";
                           $sumResult = $conn->query($totalDMoney);
                           while($row = mysqli_fetch_array($sumResult))
                           {
                               ?><p>Total Money Diposit $ : </p><h1 class="text-center my-4"><?php echo $totalDAmount = $row['sum(Amount)']; ?>/- </h1><?php
                               // echo "Total : ".$row['sum(Amount)'];
                           }
                       }
                       
                    ?>
                </div>
            </div>
        </div>
        </form><hr>
        <div class="container">
            <p><?php 
                if(isset($_POST['btnFilter']))
                {
                    $totalEAmount; 
                    $totalDAmount;
                    $totalMill;  
                    if(!$totalDAmount)
                    {
                        if(!$totalEAmount)
                        {
                            echo"Please select currect date and try again. Thank you.";
                        }
                    }
                    else
                    {
                        echo "Mill Rate: ".$millRate = $totalEAmount/$totalMill;
                        echo "; Available Amount: ".$availableAmount = $totalDAmount-$totalEAmount;
                    }
                }
            ?></p>
        </div>
    </section>
    
</body>
</html>