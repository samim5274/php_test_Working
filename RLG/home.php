<?php

    include 'dbConnect.php';

    session_start();

    if(isset($_SESSION['Id']) && isset($_SESSION['FirstName']))
    {
     

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
        .carousel-item
        {
            height: 450px;
        }
        .carousel-img-1 
        {
            background-image:linear-gradient(rgba(142, 141, 141, 0.7),rgba(142, 141, 141, 0.7)),url('img/bg (2).jpg');
            background-size: cover;
        }
        .carousel-img-2 
        {
            background-image:linear-gradient(rgba(142, 141, 141, 0.7),rgba(142, 141, 141, 0.7)),url('img/bg (3).jpg');
            background-size: cover;
        }
        .carousel-img-3 
        {
            background-image:linear-gradient(rgba(142, 141, 141, 0.7),rgba(142, 141, 141, 0.7)),url('img/bg (4).jpg');
            background-size: cover;
        }
        .logo{
            max-height: 2.5rem;
            width: auto;
        }
        #testimonial .slick-prev::before{
    color: #000;
}
#testimonial .slick-next::before{
  color: #000;
}
    </style>
</head>
<body>

<!--slide section start-->


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item carousel-img-1 active">
      <!-- <img src="img/bg (1).jpg" class="d-block w-100" alt="..."> -->
      <div class="carousel-caption">
        <h2 class="display-4">Full-Stack Development</h2>
        <p class="lead">Full-stack developers are proficient in both front-end and back-end development. They can handle all aspects of web development, from designing user interfaces to implementing server logic and managing databases.</p>
        <a href="#" class="btn btn-warning btn-sm">Get Offer</a>
      </div>
    </div>
    <div class="carousel-item carousel-img-2">
      <!-- <img src="img/bg (6).jpg" class="d-block w-100" alt="..."> -->
      <div class="carousel-caption">
      <h2 class="display-4">Data Analysis</h2>
        <p class="lead">Data science finds applications in numerous industries, including finance, healthcare, e-commerce, marketing, manufacturing, and more. Organizations use data science to make informed decisions.</p>
        <a href="#" class="btn btn-warning btn-sm">Get Offer</a>
      </div>
    </div>
    <div class="carousel-item carousel-img-3">
      <!-- <img src="img/bg (29).jpg" class="d-block w-100" alt="..."> -->
      <div class="carousel-caption">
      <h2 class="display-4">Desktop Application C#</h2>
        <p class="lead">Data science finds applications in numerous industries, including finance, healthcare, e-commerce, marketing, manufacturing, and more. Organizations use data science to make informed decisions, automate processes, improve products.</p>
        <a href="#" class="btn btn-warning btn-sm">Get Offer</a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!--slide section end-->

<!-- menu section start -->


    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <!-- <a class="navbar-brand" href="#">-RLG</a> -->
        <a class="navbar-brand" href="index.php">
            <img src="img/logo.png" alt="xxx" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Rule</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Feedback</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Exit<?php echo" : ". $_SESSION['FirstName']; ?></a>
            </li>
            </ul>
        </div>
    </nav>


<!-- menu section end -->




<!-- card section start -->

    <section class="LetestVlog">
        <div class="container">
            <div class="row my-4">            
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                    <img src="img/bg (12).jpg" class="card-img-top" alt="Photo loading...">
                    <div class="card-body">
                        <h5 class="card-title">Step 1: Information</h5>
                        <p class="card-text">In this phase you have to collect information from unknown people.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                    <img src="img/bg (11).jpg" class="card-img-top" alt="Photo loading...">
                    <div class="card-body">
                        <h5 class="card-title">Step 2: Picture</h5>
                        <p class="card-text">In this stage you have to collect the pictures of those unknown people.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                    <img src="img/bg (13).jpg" class="card-img-top" alt="Photo loading...">
                    <div class="card-body">
                        <h5 class="card-title">Step 3: location information</h5>
                        <p class="card-text">In this stage you have to collect pictures and information about different types of animals.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    


<!-- card section end -->



<!--user login video link: https://www.youtube.com/watch?v=JDn6OAMnJwQ -->





        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        

</body>
</html>

<?php
       
    }
    else
    {
        header("Location: login.php");
        exit();
    }
    ?>