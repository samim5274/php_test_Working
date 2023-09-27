<?php

include 'dmtdb.php';

    if(isset($_POST['btnSave']))
    {
        $date = $_POST['dtpDate'];
        $name = $_POST['cbxName'];
        $mil = $_POST['txtMil'];
        $remark = $_POST['txtRemark'];

        $sql = "INSERT INTO `tb_milldetail`(`Date`, `Name`, `Mill`, `Remark`) VALUES ('$date','$name','$mil','$remark')";
        $sqlResult = mysqli_query($conn,$sql);

        if(!$sqlResult)
        {
            echo"Data not save. Please try again. Thank you.";
        }
        else
        {
            header("Location: milDetail.php");
        }
    }

?>