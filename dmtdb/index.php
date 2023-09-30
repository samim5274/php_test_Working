<?php include 'dmtdb.php' ?>
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
            </ul>
        </nav>
    </div>
</div>
    
</body>
</html>