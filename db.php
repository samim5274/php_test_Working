<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "mystore";

$connection = mysqli_connect($servername,$username,$password,$database);

if(!$connection)
{
    echo "Connection failed";
    exit();
}



