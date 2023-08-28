<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/PostVlogs.css">
    <title>Post Your Vlogs</title>
</head>
<body>
    
<div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="wrapper">
                <div class="text-center  name">
                <div class="logo">
                        <img src="img/bg (19).jpg" alt="Sign Up">
                    </div>
                  <form action="createUser.php" method="post">
                    <div class="form-field d-flex align-items-center">
                      <span class="fas fa-user"></span>
                      <input type="text" name="title" placeholder="Enter Vlogs Title" required>
                    </div>
                    <div class="form-field d-flex align-items-center">
                      <span class="fas fa-user"></span>
                      <input type="text" name="subject" placeholder="Date">
                    </div>
                    <div class="form-field d-flex align-items-center">
                      <span class="fa fa-envelope"></span>
                      <input type="text" name="introduction" placeholder="Introduction" required>
                    </div>  
                    <div class="form-field d-flex align-items-center">
                      <span class="fa fa-envelope"></span>
                      <input type="text" name="story" placeholder="Type your vlog story..." required>
                    </div>  
                    <div class="form-field d-flex align-items-center">
                      <span class="fa fa-envelope"></span>
                      <input type="file" name="file" required>
                    </div>              
                    <button type="submit" class="btn btn-primary">Save</button>
                  </form>             
                </div>
              </div>
            </div>
          </div>
        </div>

</body>
</html>