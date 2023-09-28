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



    <!--Data insert code-->

<section class="container mt-2">
    <div class="row">
        <h1 class="display-4 text-center">Expenses Money</h1>
        <h4>
                <div class="text-center">
                    <?php
                        $totalAmount = "SELECT sum(Amount) FROM tb_expenses";
                        $sumResult = $conn->query($totalAmount);
                        while($row = mysqli_fetch_array($sumResult))
                        {
                            echo"Total Amount : $".$row['sum(Amount)']."/-";
                        }
                    ?>
                </div>
            </h4><hr>

        <div class="col-md-6">
            <form action="expensesBack.php" method="POST">
                <div class="col-md-12">
                    <label for="dob"class="form-label">Date</label>
                    <input type="date" name="dtpDate" id="dob" required class="form-control" >
                </div><br>

                <div class="col-md-12">
                    <label for="expenser"class="form-label">Expenser Name</label><br>
                   <select name="cbxExpenser" required id="expenser" class="form-select">
                   <?php 
                            $sql = "SELECT * FROM tb_std_info";
                            $result = mysqli_query($conn,$sql);
                            ?><option selected disabled>Select Expenser Name</option><?php
                            while($row = mysqli_fetch_array($result)){?>
                                
                                <option value="<?php echo $row['Name'];?>"><?php echo $row['Name'];?></option>
                        <?php    }?>
                   </select>
                </div><br>

                <div class="col-md-12">
                    <label for="amount"class="form-label">Total Amount</label>
                    <input type="number" id="amount" name="txtAmount" class="form-control" required placeholder="Amount">
                </div>
                <div class="col-md-12">
                    <label for="remark"class="form-label">Bazar Detail's</label>
                    <textarea class="form-control" name="txtRemark" placeholder="You can write something for bazar details(Optional)." id="remark" cols="30" rows="5"></textarea>
                </div><br>
                <input type="submit" name="btnSave" class="btn btn-info my-4" value="Save">
                <a href="" class="text-light"><button class="btn btn-warning">Data Filter</button></a>
            </form>
            <a href="index.php" class="text-light"><button class="btn btn-warning">Back</button></a>
        </div>
        <div class="col-md-6">
            <table class="table table-bordered text-center ">
                <thead>
                    <th>SL</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Amount</th>
                </thead>
                <tbody>
                    <?php
                        $sqlShow = "SELECT * FROM `tb_expenses` ";
                        $i=1;
                        $result = $conn->query($sqlShow);
                        if(!$result)
                        {
                            die("Invalid Query: ".$conn->connection_error);
                        }
                        while($row = $result->fetch_assoc())
                        {
                            echo"
                            <tr>
                                <td>".$i++."</td>
                                <td>".$row["Date"]."</td>
                                <td>".$row["Name"]."</td>
                                <td>$".$row["Amount"]."/-</td>
                            </tr>
                            ";
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</section>
    
</body>
</html>