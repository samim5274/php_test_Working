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


<!-- <div class="container">
    <div class="row">
        <div class="col text-center my-4">
            <h1>Money Diposit</h1>
        </div>
    </div>
</div>


<div class="container mt-2">    
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <input type="date" name="dipositDate" class="form-control">
            </div>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-4">
            <label for="fname"class="form-label" >Receiver</label>
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
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-4">
            <label for="fname"class="form-label" >Dipositor</label>
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
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="fname"class="form-label" >Amount $</label>
                <input type="number" name="txtAmount" class="form-control" required placeholder="Amount">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input type="submit" name="btnDipositMoney" class="btn btn-info form-control" value="Save">
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <br><br>
</div>

<br><br><br><br><hr> -->

<div class="container">
    <div class="row">
        <div class="col text-center my-1">
            <h1>Money Diposit</h1>
            <h4>
                <div class="text-right">
                    <?php
                        $totalAmount = "SELECT sum(Amount) FROM tb_diposit_money";
                        $sumResult = $conn->query($totalAmount);
                        while($row = mysqli_fetch_array($sumResult))
                        {
                            echo"Total Amount: ".$row['sum(Amount)'];
                        }
                    ?>
                </div>
            </h4>
        </div>
    </div>
</div>
<hr>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="dipositMoneyBack.php" method="POST">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <input type="date" required name="dipositDate" class="form-control">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="Receiver"class="form-label" >Receiver</label>
                        <select name="cbxReceiver" required id="Receiver" class="form-select">
                        <?php 
                            $sql = "SELECT * FROM tb_std_info";
                            $result = mysqli_query($conn,$sql);
                            ?><option selected disabled>Select name</option><?php
                            while($row = mysqli_fetch_array($result)){?>
                                
                                <option value="<?php echo $row['Name'];?>"><?php echo $row['Name'];?></option>
                        <?php    }?>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="Dipositor"class="form-label" >Dipositor</label>
                        <select name="cbxDipositor" required id="Dipositor"  class="form-select">
                        <?php 
                            $sql = "SELECT * FROM tb_std_info";
                            $result = mysqli_query($conn,$sql);
                            ?><option selected disabled>Select name</option><?php
                            while($row = mysqli_fetch_array($result)){?>
                                
                                <option value="<?php echo $row['Name'];?>"><?php echo $row['Name'];?></option>
                        <?php    }?>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="deaprtment"class="form-label">Purpose</label><br>
                    <select name="cbxPurpose" required id="deaprtment" class="form-select">
                        <option selected disabled>Select Purpose</option>
                        <option value="Food">Food</option>
                        <option value="Food Cooker">Food Cooker</option>
                        <option value="Wifi">Wifi</option>
                        <option value="Water">Water</option>
                        <option value="Dirt">Dirt</option>
                        <option value="Gas">Gas</option>
                        <option value="Electricity">Electricity</option>
                    </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="fname"class="form-label" >Amount $</label>
                            <input type="number" name="txtAmount" class="form-control" required placeholder="Amount">
                        </div>
                        <div class="col">
                        <label for="remark"class="form-label">Remark's</label>
                        <textarea class="form-control" name="txtRemark" placeholder="You can write something for note(Optional)." id="remark" cols="30" rows="3"></textarea>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="submit" name="btnDipositMoney" class="btn btn-info form-control mt-4" value="Save">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <br>
        </div>

        <!--Data show code start-->

        <div class="col-md-6 overflow-auto" 
  style="max-width: 100%; max-height: 700px;">
                <table class="table table-bordered text-center ">
                    <tr>
                        <th>SL</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Purpose</th>
                        <th>Amount</th>
                    </tr>
                    <tbody>

                    <?php
                        $sqlShow = "SELECT * FROM `tb_diposit_money` ";
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
                                <td>".$row["D_Name"]."</td>
                                <td>".$row["Purpose"]."</td>
                                <td>".$row["Amount"]."</td>
                            </tr>
                            ";
                        }
                    ?>

                    </tbody>
                </table>
            </div>
    </div>
</div>

<br><br><hr>

</body>
</html>