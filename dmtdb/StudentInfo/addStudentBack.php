<?php 


include '../dmtdb.php';

    $FirstName = $_POST['txtFname']." ".$_POST['txtLnmae'];
    $DateOfBirth = $_POST['dtpDob'];
    $Department = $_POST['cbxDepartment'];
    $Gender = $_POST['rdoGender'];
    $Address = $_POST['txtAddress'];    
    $Phone = $_POST['txtPhone'];
    $EPhone = $_POST['txtEPhone'];
    $Remark = $_POST['txtRemark'];

    $sql = "INSERT INTO `tb_std_info`(`Name`, `DateOfBirth`, `Department`, `Gender`, `Address`, `Phone`, `EmergencyPhone`, `Remark`) VALUES ('$FirstName','$DateOfBirth','$Department','$Gender','$Address','$Phone','$EPhone','$Remark')";

    $sql_Result = mysqli_query($conn,$sql);

    if(!$sql_Result)
    {
        echo"Data not save.Please try again. Thank you.";
    }
    else
    {
        header("Location: /DMTDB/StudentInfo/std_info.php");
    }


?>