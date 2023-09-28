<?php

include 'dmtdb.php';

    if(isset($_POST['btnSave']))
    {
        $date = $_POST['dtpDate'];
        $name = $_POST['cbxExpenser'];
        $amount = $_POST['txtAmount'];
        $remark = $_POST['txtRemark'];

        $sql = "INSERT INTO `tb_expenses`(`Date`, `Name`, `Amount`, `Remark`) VALUES ('$date','$name','$amount','$remark')";
        $sqlResult = mysqli_query($conn,$sql);
        if(!$sqlResult)
        {
            echo"Data not save. Please try agail. Thanks you!";
        }
        else
        {
            header("Location: expenses.php");
        }
    }

?>