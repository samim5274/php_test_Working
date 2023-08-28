<?php

    include 'dbConnect.php';    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script type="text/javascript">
        function preventBack(){window.history.forward()};
        setTimeout("preventBack()",0);
        window.onunload=function(){null};
    </script>
    <link rel="stylesheet" href="css/style.css">
    <title>Welcome to -RLG</title>
</head>
<body>
    
    <section id="login-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                    <div class="logo">
                        <img src="img/bg (19).jpg" alt="">
                    </div>
                    <div class="text-center mt-4 name">
                        -RLG
                        <?php
                                if(isset($_GET['error'])){ ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php   }
                            ?>
                        </div>
                            <form action="login.php" method="post" class="p-3 mt-3">
                                <div class="form-field d-flex align-items-center">
                                    <span class="far fa-user"></span>
                                    <input type="text" name="username" id="userName" placeholder="Emain address">
                                </div>
                                <div class="form-field d-flex align-items-center">
                                    <span class="fas fa-key"></span>
                                    <input type="password" name="password" id="pwd" placeholder="Password">
                                </div>
                                <button type="submit" class="btn mt-3">Login</button>
                            </form>
                            <div class="text-center fs-6">
                                <a href="#">Forget password?</a> or <a href="resister.php">Sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    


</body>
</html>