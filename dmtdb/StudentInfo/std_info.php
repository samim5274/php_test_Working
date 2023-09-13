<?php include '../dmtdb.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dormitory System</title>
    <style>
        .overflow-auto{
            width:100%;
            height: 1220px;
            overflow: auto;
        }
    </style>
</head>
<body>




    <!--Data insert code-->

<section class="container mt-2">
    <div class="row">
        <h1 class="display-4 text-center">Dormitor System</h1>
        <div class="col-md-6">
            <form action="addStudentBack.php" method="POST">
                <div class="col-md-12">
                    <label for="fname"class="form-label" >First Name</label>
                    <input type="text" id="fname" name="txtFname" class="form-control" required placeholder="Enter your first name">
                </div><br>
                <div class="col-md-12">
                    <label for="lname"class="form-label">Last Name</label>
                    <input type="text" name="txtLnmae" id="lname" class="form-control" required placeholder="Enter your last name">
                </div><br>
                <div class="col-md-12">
                    <label for="dob"class="form-label">Date Of Birth</label>
                    <input type="date" name="dtpDob" id="dob" required class="form-control" >
                </div><br>
                <div class="col-md-12">
                    <label for="" class="form-label">Select Your Gender</label>
                    <div class="form-check">
                            <input type="radio" name="rdoGender" id="gender" class="form-check-input" value="Male">
                            <label for="gender" class="form-check-label">Male</label>                            
                        </div>
                        <div class="form-check">
                            <input type="radio" name="rdoGender" id="gender1" class="form-check-input" value="Female">
                            <label for="gender1" class="form-check-label">Female</label>                            
                        </div>
                        <div class="form-check">
                            <input type="radio" name="rdoGender" id="gender2" class="form-check-input" value="Other">
                            <label for="gender2" class="form-check-label">Other</label>                            
                        </div>
                </div><br>
                <div class="col-md-12">
                    <label for="deaprtment"class="form-label">Department</label><br>
                   <select name="cbxDepartment" required id="deaprtment" class="form-select">
                    <option selected disabled>Select Department</option>
                    <option value="Textile">BSc in Textile</option>
                    <option value="Civil">BSc in Civil</option>
                    <option value="EEE">BSc in EEE</option>
                    <option value="FOOD">BSc in FOOD</option>
                    <option value="BBA">BSc in BBA</option>
                    <option value="DBA">BSc in DBA</option>
                    <option value="CSE">BSc in CSE</option>
                   </select>
                </div><br>
                <div class="col-md-12">
                    <label for="phone" class="form-label">Your Phone</label>
                    <input type="number" id="phone" name="txtPhone" class="form-control" required placeholder="Enter your phone">
                </div><br>
                <div class="col-md-12">
                    <label for="Ephone"class="form-label">Emergency Phone</label>
                    <input type="number" id="Ephone" class="form-control" name="txtEPhone" required placeholder="Emergency your phone">
                </div><br>
                <div class="col-md-12">
                    <label for="address"class="form-label">Address</label>
                    <textarea required class="form-control" name="txtAddress" placeholder="Enter your address" id="address" cols="30" rows="5"></textarea>
                </div><br>
                <div class="col-md-12">
                    <label for="remark"class="form-label">Remark's</label>
                    <textarea class="form-control" name="txtRemark" placeholder="You can write something for note(Optional)." id="remark" cols="30" rows="5"></textarea>
                </div><br>
                <input type="submit" name="btnSave" class="btn btn-info my-4" value="Save">
                <button class="btn btn-primary"><a href="filterStd.php" class="text-light">Filter with date</a></button>
            </form>
        </div>

   


                <!--Data show code-->

        <div class="col overflow-auto">
            <table class="table table-bordered text-center ">
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Department</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>
                <tbody>
                    <?php
                    
                        
                        $sqlShow = "SELECT * FROM `tb_std_info`";
                        $i=1;
                        $result = $conn->query($sqlShow);
                        if(!$result)
                        {
                            die("Invalid Query: ".$conn->connection_error);
                        }

                        while($row = $result->fetch_assoc())
                        {
                            echo "
                            <tr>
                                <td>".$i++."</td>
                                <td>".$row["Name"]."</td>
                                <td>".$row["DateOfBirth"]."</td>
                                <td>".$row["Department"]."</td>
                                <td>".$row["Address"]."</td>
                                <td>".$row["Phone"]."</td>
                            </tr>
                            ";
                        }

                    
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</section>
    
</body>
</html>