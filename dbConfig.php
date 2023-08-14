<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mystore";

$connection = new mysqli($servername,$username,$password,$database);

if ($connection->connect_error) {
    die("Connection faild: ".$connection->connect_Error);
}