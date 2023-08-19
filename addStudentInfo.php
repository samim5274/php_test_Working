<?php

$conn = mysqli_connect("localhost","root","","mystore");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Students</title>
</head>
<body>

        <div class="container" id="stdInfo">
            <div class="row">
                <form action="addStudent.php" method="post">
                    <div class="form-group">
                        <label name="Id" for="">1</label>

                        <label for="text">First Name</label>
                        <input type="text" name="firstName" class="form-control" placeholder="First Name">

                        <label for="text">last name</label>
                        <input type="text" name="lastName" class="form-control" placeholder="last name">

                        <label for="text">Gender</label><br>
                        <input type="radio" id="gender" name="Gender" value="Male">
                        <label for="Male">Male</label><br>
                        <input type="radio" id="gender" name="Gender" value="Female">
                        <label for="Female">Female</label><br>

                        <label for="text"> Date of Birth</label><br>
                        <input type="date" name="DateOfBirth"><br>  

                        <label for="text">Present Address</label><br>
                        <input type="text" name="p1Address" class="form-control" placeholder="Present Address"><br>

                        <label for="text">Permanent Address</label><br>
                        <input type="text" name="p2Address" class="form-control" placeholder="Permanent Address"><br>

                        <label for="text">Department</label><br>
                            <select name="Department" id="Department">
                                <option selected disabled>Choose Department</option>
                                <option value="Merchandiser">Merchandiser</option>
                                <option value="Quality">Quality</option>
                                <option value="Accout">Account</option>
                                <option value="HRM">HR(Humen Research Managment)</option>
                                <option value="It">It(Information Technology.)</option>
                                </optgroup>                        
                            </select><br>   

                        <label for="text">Designation</label><br>
                        <input type="text" name="Designation" id="Designation" class="form-control" placeholder="Designation">

                        <label for="text">Phone</label><br>
                        <input type="number" name="Phone" class="form-control" required placeholder="Phone">

                    </div>
                    <button name="submit" class="btn btn-primary">Submite</button>
                </form>   <br>
                
            </div>
        </div>

</body>
</html>