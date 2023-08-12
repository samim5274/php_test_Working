<?php

    $conn = mysqli_connect("localhost","root","","mystore");

    $name = $_POST['fname']." ".$_POST['lname'];
    $div = $_POST['div'];

    $sql = "INSERT INTO `list`(`name`, `division`) VALUES ('$name','$div')";
    $insert = mysqli_query($conn, $sql);
    if (!$insert)
    {
        echo "Error 404";
    }
    else {
        header("Location: /mystore/");
    }

?>