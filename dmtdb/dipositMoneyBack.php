<?php

    include 'dmtdb.php';


    if(isset($_POST['btnDipositMoney']))
    {
        $date = $_POST['dipositDate'];
        $rName = $_POST['cbxReceiver'];
        $dName = $_POST['cbxDipositor'];
        $purpose = $_POST['cbxPurpose'];
        $amount = $_POST['txtAmount'];
        $remark = $_POST['txtRemark'];

        $sql = "INSERT INTO `tb_diposit_money`(`Date`, `R_Name`, `D_Name`, `Purpose`, `Amount`, `Remark`) VALUES ('$date','$rName','$dName','$purpose','$amount','$remark')";

        $sql_Result = mysqli_query($conn,$sql);

        if(!$sql_Result)
        {
            echo"Data not save.Please try again. Thank you.";
        }
        else
        {
            header("Location: /DMTDB/dipositMoney.php");
        }
    }

?>