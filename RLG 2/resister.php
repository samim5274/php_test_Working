<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script type="text/javascript">
        function preventBack(){window.history.forward()};
        setTimeout("preventBack()",0);
        window.onunload=function(){null};
    </script>
    <link rel="stylesheet" href="css/register.css">
    <title>-RLG/Resigter</title>
    
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
                    -Sign in
                  <form action="createUser.php" method="post">
                    <div class="form-field d-flex align-items-center">
                      <span class="fas fa-user"></span>
                      <input type="text" name="firstName" placeholder="First name" required>
                    </div>
                    <div class="form-field d-flex align-items-center">
                      <span class="fas fa-user"></span>
                      <input type="text" name="lastName" placeholder="Last name">
                    </div>
                    <div class="form-field d-flex align-items-center">
                      <span class="fa fa-envelope"></span>
                      <input type="text" name="email" placeholder="Email address" required>
                    </div>
                    <div class="form-field d-flex align-items-center">
                      <span class="fa fa-calendar"></span>
                      <input type="date" name="dateOfBirth">
                    </div>
                    <div class="form-field d-flex align-items-center">
                      <span class="fa fa-location-arrow"></span>
                      <input type="text" name="address" placeholder="Address">
                    </div>
                    <div class="form-field d-flex align-items-center">
                      <span class="fa fa-phone-square"></span>
                      <input type="number" name="phone" required placeholder="Phone">
                    </div>
                    <div class="form-field d-flex align-items-center">
                      <span class="fa fa-user"></span>
                      <input type="text" name = "username" placeholder="Username">                      
                    </div>
                    <p class="form-text text-muted mb-4">You cann't change your username!</p>
                    <div class="form-field d-flex align-items-center">
                      <span class="fa fa-lock"></span>
                      <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-check d-flex justify-content-center mb-5">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                      <label class="form-check-label" for="flexSwitchCheckDefault">I agree all statements in <a href="#">Terms of service</a></label>
                    </div>
                  </div>
                    <!-- <div type="submit" class="btn btn-primary">Register</div>   -->
                    <button type="submit" class="btn btn-primary">Register</button>
                  </form>
                  <a href="index.php" class="btn btn-primary my-4"><span class="fa fa-arrow-left"></span> Back</a>              
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
        <?php
              if(isset($_GET['error'])){ ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
          <?php   }
          ?>
        </div>

        <!--<div class="container">
          Button trigger modal 
          <button type="button" class="btn btn-primary m-4" data-toggle="modal" data-target="#staticBackdrop">
            Register
          </button>-->

          <!-- Modal 
          <form >
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"          aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Creating <a href="index.php" target="_blank">-RLG</a>  new account!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span class="close2" aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Are you sure create new account? And check all terms and condition.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>-->

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script>
          $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
          })
        </script>

</body>
</html>