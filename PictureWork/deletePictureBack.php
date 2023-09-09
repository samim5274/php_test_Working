<?php 

include "PDB.php";

if(isset($_POST['btnImgDelete']))
{

    $id = $_POST['idDelete'];
    $img = $_POST['imgDelete'];

    $query = "DELETE FROM `pictureinfo` WHERE id = '$id'";
    $sql_result = mysqli_query($connection, $query);
    

    if($sql_result)
    {
        unlink("Pic/".$img);
        $_SESSION['status'] = "Delete successfully.";
        header("Location: deletePicture.php");
    }
    else
    {
        $_SESSION['status'] = "Delete un-successful.";
        header("Location: deletePicture.php");
    }

}