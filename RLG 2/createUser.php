<?php

 include 'dbConnect.php';

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password  = $_POST['password'];

    $sql = "INSERT INTO `userinfo`(`FirstName`, `LastName`, `Email`, `DateOfBirth`, `Address`, `Phone`, `Password`, `Username`) VALUES ('$firstName','$lastName','$email','$dateOfBirth','$address','$phone','$password','$username')";

    if($connection->query($sql) === true)
    {
        header("Location: /rlg/index.php");
    }
    else{
        echo "Error: ". $sql . "<br>" . $connection->error;
    }

    $connection->close();

?>