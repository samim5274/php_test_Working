<?php include 'dmtdb.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>DMT - Mil Detail</title>
</head>
<body>


<section>
    <div class="container">
        <div class="row text-center">
            <div class="col mT-4">
                <h3 class="display-4">Mill Detail</h3>
            </div>
        </div>
    </div>
</section>
    
<section>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-6">
                <form action="milDetailBack.php" method="POST">
                <div class="form-group">
                    <input type="date" required name="dtpDate" class="form-control">
                </div><br>
                <div class="form-group">
                    <label for="name" class="from-label">Name</label><br>
                    <select name="cbxName" required id="name" class="form-select">
                        <?php 
                            $sql = "SELECT * FROM `tb_std_info`";
                            $result = mysqli_query($conn,$sql);
                        ?>
                        <option selected disabled>Select Border name</option>
                        <?php 
                            while($row = mysqli_fetch_array($result))
                            {?>
                                <option value="<?php echo $row['Name']; ?>"><?php echo $row['Name']; ?></option>
                        <?php    }
                        ?>
                    </select>
                </div><br>
                <div class="form-group">
                    <label for="mil"  class="form-label">Total Mill</label>
                    <input type="float" name="txtMil" required class="form-control" placeholder="Total mill" >
                </div><br>
                <div class="form-group">
                <label for="remark" class="form-label">Remark's</label>
                <textarea name="txtRemark" id="remark" cols="30" rows="5" placeholder="Short messages (Optional)." class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success form-control mt-4" value="Save">
                    <a href="index.php"><input class="btn btn-warning form-control mt-4" name="btnSave" value="Back"></a>
                </div>
                </form>
            </div>
            <div class="col-md-6 text-center ">
                <table class="table table-bordered text-center">
                    <thead>
                        <th>SL</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Mill</th>
                        <th>Remark</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>27-09-2023</td>
                            <td>Shamim Hossain</td>
                            <td>3</td>
                            <td>N/A</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

</body>
</html>