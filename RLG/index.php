<?php

    include 'dbConnect.php';    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script type="text/javascript">
        function preventBack(){window.history.forward()};
        setTimeout("preventBack()",0);
        window.onunload=function(){null};
    </script>
    <title>Welcome to -RLG</title>
</head>
<body>
    
    <section id="login-section">
        <div class="container">
            <div class="row">
                <div class="col">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <?php
                            if(isset($_GET['error'])){ ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php   }
                        ?>
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" placeholder="Email address" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" placeholder="Password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check">
                        <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </section>


    


</body>
</html>