<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mystore";

$conn = new mysqli($servername, $username, $password, $dbname);
$count = 0;

  if ($conn->connect_error) 
  {
    die("Connection failed: " . $conn->connect_error);
  }

  $sqlShow = "SELECT * FROM tb_student_info ";
  $result = $conn->query($sqlShow);

  if(!$result)
  {
    die("Invalid query: ".$conn->connect_errno);
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Add Students</title>
</head>
<body>

  <section class="container">
    <div class="row">
        <div class="col-md-6">
            <label for="firstname" class="form-lable">Fisrt Name</label>
            <input id="firstname" type="text" class="form-control" placeholder="First Name">
        </div>
        <div class="col-md-6">
            <label for="lastname" class="form-lable">Last Name</label>
            <input id="lastname" type="text" class="form-control" placeholder="Last Name">
        </div>    
        <div class="col-12">
            <label for="p1address">Address 1</label>
            <input type="text" id="p1address" class="form-control" placeholder="Present Address">
        </div>   
        <div class="col-12">
            <label for="p2address">Address 2</label>
            <input type="text" id="p2address" class="form-control" placeholder="Permanent Address">
        </div>   
        <div class="col-md-6">
            <label for="date">Date of Birth</label>
            <input type="date" id="date" class="form-control">
        </div> 
        <div class="col-md-4">
            <label for="phone">Phone</label>
            <input type="number" class="form-control" id="phone" placeholder="Phone number">
        </div>
        <div class="col-md-2">
            <label for="gender">Gender</label>
                <div class="form-check">
                    <input type="radio" name="gender" id="gender" class="form-check-input" value="Male">
                    <label for="gender" class="form-check-label">Male</label>
                </div>   
                <div class="form-check">
                    <input type="radio" name="gender" id="gender2" class="form-check-input" value="Female">
                    <label for="gender2" class="form-check-label">Female</label>
                </div>  
                <div class="form-check">
                    <input type="radio" name="gender" id="gender3" class="form-check-input" value="Other">
                    <label for="gender3" class="form-check-label">Other</label>
                </div> 
        </div>
        <div class="col-md-6">
            <label for="designation" class="form-lable">Designation</label>
            <input id="designation" type="text" class="form-control" placeholder="Designation">
        </div>
        <div class="col-md-6">
            <label for="department" class="form-lable">Department</label>
            <select name="department" id="department" class="form-select">
                <option selected disabled>choose Department</option>
                <option value="Marchandiser">Marchandiser</option>
                <option value="Quality">Quality</option>
                <option value="Commercial">Commercial</option>
                <option value="HR">HR</option>
                <option value="IT">IT</option>
                <option value="Account">Account</option>
            </select>
        </div> <br>
        <div class="col-md-12">
            <button class="btn btn-primary">Save</button>     
            <button class="btn btn-warning">Clear</button>        
        </div>
    </div>        
  </section>



    <div class="container">
        <div class="row">
            <div class="col">
                <form action="addStudent.php" method="post">
                    <div class="form-group" id="btnClear">
                        
                        <label>First Name</label>
                        <input type="text" name="firstName" id="firstName" class="form-control" required placeholder="First Name">
                        
                        <label>last name</label>
                        <input type="text" name="lastName" id="lastName" class="form-control" placeholder="last name">
                        
                        <label>Gender</label><br>
                        <input type="radio" id="male" name="gender" value="Male">
                        <label>Male</label><br>
                        <input type="radio" id="female" name="gender" value="Female">
                        <label>Female</label><br>
                        
                        <label> Date of Birth</label><br>
                        <input type="date" id="DateOfBirth" max="2023-12-31" min="2023-01-01" required name="DateOfBirth"><br>  

                                <label>Present Address</label><br>
                                <input type="text" name="p1Address" id="p1Address" class="form-control" placeholder="Present Address"><br>
                                
                                <label>Permanent Address</label><br>
                                <input type="text" required name="p2Address" id="p2Address" class="form-control" placeholder="Permanent Address"><br>
                                
                                <label>Department</label><br>
                                <select name="Department" id="Department">
                                        <option selected disabled>Choose Department</option>
                                        <option value="Merchandiser">Merchandiser</option>
                                        <option value="Quality">Quality</option>
                                        <option value="Accout">Account</option>
                                        <option value="HRM">HR(Humen Research Managment)</option>
                                        <option value="It">It(Information Technology.)</option>
                                        </optgroup>                        
                                    </select><br>   
                                    
                                    <label>Designation</label><br>
                                    <input type="text" name="Designation" id="Designation" class="form-control" placeholder="Designation">
                                    
                                    <label>Phone</label><br>
                                    <input type="number" name="Phone" id="Phone" class="form-control" required placeholder="Phone">

                                </div>
                                <button name="submit" class="btn btn-primary">Submite</button>
                                <button class="btn btn-warning" onclick="ClearText();">Clear</button>
                            </form> 
                    </div>  
                </div>                
            </div>            
        </div>        
    </div>


    <div class="container">
        <div class="col">
            <table class="table">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Department</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>
                <tbody>
                    <?php
                    
                    while($row = $result->fetch_assoc())
                    {
                        echo "
                        <tr>
                            <td>".$row["FirstName"]."</td>
                            <td>".$row["LastName"]."</td>
                            <td>".$row["Department"]."</td>
                            <td>".$row["DateOfBirth"]."</td>
                            <td>".$row["PresentAddress"]."</td>
                            <td>".$row["Phone"]."</td>
                        </tr>";
                    }                    

                    $TotalNumber = "Select sum(Phone) from tb_student_info";
                    $sumResult = $conn->query($TotalNumber);
                    while($row = mysqli_fetch_array($sumResult)){
                        echo"Total Value is : ".$row['sum(Phone)'];
                        echo"<br>";
                    }

                    ?>                    
                    
                </tbody>
            </table>
        </div>
    </div>


    <script src="script.js"></script>
    
        
</body>
</html>
        