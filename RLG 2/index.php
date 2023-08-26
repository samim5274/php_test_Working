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
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body {
        background: #ecf0f3;
        }
     .error{
            background: #f2dede;
            color: #a94442;
            font-size: 1.3rem;
            padding: .5rem;
            margin-top: .5rem;
            width: 100%;
            border-radius: .5rem;
        }   
.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}

.logo {
    width: 80px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}

.wrapper .btn:hover {
    background-color: #039BE5;
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4;
}

.wrapper a:hover {
    color: #039BE5;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
    </style>
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
    </section>


    


</body>
</html>