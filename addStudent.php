<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mystore";

$conn = new mysqli($servername, $username, $password, $dbname);
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$DateOfBirth = $_POST['DateOfBirth'];
$p1Address = $_POST['p1Address'];
$p2Address = $_POST['p2Address'];
$Department = $_POST['Department'];
$Designation = $_POST['Designation'];
$Phone = $_POST['Phone'];


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tb_student_info (FirstName, LastName, Gender, DateOfBirth, PresentAddress, PermanentAddress, Department, Designation, Phone)
VALUES ('$firstName', '$lastName', '$gender', '$DateOfBirth','$p1Address','$p2Address','$Department','$Designation','$Phone')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    

?>
    