<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "ravi";

$con = mysqli_connect($server, $username, $password, $database);
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <title>Gym</title>
  <style>
    body {

      background-image: linear-gradient(50deg, blue, white, black);


    }

    .carousel-item {
      height: 20%;

    }

    img {
      height: 35rem;

    }

    button {
      margin: 15px;
      border-radius: 10px;






    }

    #btn1 {

      background: rgb(233, 77, 85);
      box-shadow: 0 5px 5px 5px rgba(0, 0, 0.5)
    }

    #btn2 {
      background: rgb(223, 137, 67);
      box-shadow: 0 5px 5px 5px rgba(0, 0, 0.5)
    }

    #btn3 {
      background: rgb(241, 239, 98);
      box-shadow: 0 5px 5px 5px rgba(0, 0, 0.5)
    }

    #a {
      text-decoration: none;
      color: black;
      cursor: pointer;
    }

    /* #btn:hover:not(.active) {
           
      
           transform: scale(1.1)
       } */
  </style>
</head>

<body>

  <!-- nevbar cding -->
  <nav class="navbar fixed-top navbar-expand-lg  p-md-3 " style="height: 75px; background-color: rgba(0, 0,0,0.5);">
    <div class="container-fluid ">
      <a class="navbar-brand" href="#"><img src="logo10.jpg" alt="logo" style="width: 50px; height: 60px; border-radius: 60%;">
        
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto ml-auto my-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <h3 class="text-light">Home</h3>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="#">
              <h3 class="text-light">Pricing</h3>
            </a>
          </li>

        </ul>



        <a class="btn btn-primary btn-lg" href="#contect"> contect me

        </a>


      </div>
    </div>
  </nav>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="gympic1.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
         
          <p>The last three or four reps is what makes the muscle grow. ...
            'Success usually comes to those who are too busy to be looking for it. ...
            'All progress takes place outside the comfort zone. ...
            'If you think lifting is dangerous, try being weak. ...
            'The only place where success comes before work is in the dictionary</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="gympic2.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
         
          <p>The last three or four reps is what makes the muscle grow. ...
            'Success usually comes to those who are too busy to be looking for it. ...
            'All progress takes place outside the comfort zone. ...
            'If you think lifting is dangerous, try being weak. ...
            'The only place where success comes before work is in the dictionary</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="gympic3.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          
          <p>The last three or four reps is what makes the muscle grow. ...
            'Success usually comes to those who are too busy to be looking for it. ...
            'All progress takes place outside the comfort zone. ...
            'If you think lifting is dangerous, try being weak. ...
            'The only place where success comes before work is in the dictionary</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- gallery -->

  <hr>

  <div class="container">


    <div class="row">
      <!-- first colam -->

      <h1 style="text-align: center;"><B><U class="text-success " style="width:10px ;"> <span class="text-primary">Gallery</span></U></B>
      </h1>

    
      <div class="col-lg-4 col-12">

        <div class="box-container">


          <div class="box">

            <span style="font-size: 20px;font-style: oblique;"></span>
            <img src="gympic7.jpeg" alt="" style="height: 200px; width:200px ;">

          </div>

        </div>

      </div>


      <div class="col-lg-4 col-12">
        <div class="box-container">
          <div class="box">

            <span style="font-size: 20px;font-style: oblique;"></span>
            <img src="gympic8.jpeg" alt="" style="height: 200px; width:200px ;">


          </div>

        </div>

      </div>

      <div class="col-lg-4 col-12">
        <div class="box-container">
          <div class="box">

            <span style="font-size: 20px;font-style: oblique;"></span>
            <img src="gympic9.jpeg" alt="" style="height: 200px; width:200px ;">
          </div>

        </div>

      </div>

  

      <div class="row my-5">
        <!-- first colam -->


        <div class="col-lg-4 col-12">

          <div class="box-container">


            <div class="box">

              <span style="font-size: 20px;font-style: oblique;"></span>
              <img src="gympic4.jpeg" alt="" style="height: 200px; width:200px ;">

            </div>

          </div>

        </div>


        <div class="col-lg-4 col-12">
          <div class="box-container">
            <div class="box ml-1">

              <span style="font-size: 20px;font-style: oblique;"></span>
              <img src="gympic5.jpeg" alt="" style="height: 200px; width:200px ;">


            </div>

          </div>

        </div>

        <div class="col-lg-4 col-12">
          <div class="box-container">
            <div class="box ml-3">

              <span style="font-size: 20px;font-style: oblique;"></span>
              <img src="gympic6.jpeg" alt="" style="height: 200px; width:200px ;">
            </div>

          </div>

        </div>








        <hr>


        <!-- membarship form -->

        <div class="container border my-4">

          <div class="row">
            <!-- first colam -->

            <h1 style="text-align: center;"><B><U class="text-success " style="width:10px ;"> <span class="text-primary"> CONTECT </span>ME</U></B>
            </h1>
            <br><br><br> <br><br>
            <div class="col-lg-6 col-12">

              <h2><i class="fas fa-phone"></i></span> Call Us:</h2>
              <p style="font-size: 20px;">+91 8169474052</p>

              <hr>
              <h2><i class="fas fa-envelope"></i> Mail Us:</h2>
              <p style="font-size: 20px;">gaudravi16@gmail.com</p>

              <hr>
              <h2><i class="fas fa-map-marker-alt"></i> Visit Us:</h2>
              <p style="font-size: 20px;"> Thane Maharashtra flat no 599</p>

            </div>

            <div class="col-lg-6 col-12 ">
              <?php

              if (isset($_POST["submit"])) {
                $name = $_POST['name'];
                $email = $_POST['Email'];

                $message = $_POST['Message'];

                $sqlq = "INSERT INTO `user` (`name`, `Email`, `Massage`, `datetime`) VALUES ( '$name', '$email', '$message', CURRENT_TIMESTAMP)";

                if (mysqli_query($con, $sqlq)) {
                  echo "<script> alert('Registed Succesfully!!!!') ;</script>";
                  echo "<script> document.location.href='portfolio.php'; </Script>";
                }
              }
              ?>


              <form class=" " action="home.php" method="post" style="width: 400px;">
                <div class="mb-3">
                  <label for="exampleInputname" class="form-label" style="font-size: 20px;">Name</label>
                  <input type="name" style="height: 40px;font-size: 20px;" name="name" required placeholder="Enter your Name" class="form-control form-lg" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label" style="font-size: 20px;">Email address</label>
                  <input type="email" name="Email" style="height: 40px;font-size: 20px;" required class="form-control" placeholder=" Enter your Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="form-floating">
                  <h2>message</h2>
                  <textarea class="form-control" style="height: 40px;font-size: 20px;" required name="Message" placeholder="Leave a comment here" id="floatingTextarea"></textarea>

                </div>

                <br>

                <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
              </form>

              <br><br><br>

            </div>



          </div>


        </div>
      </div>

      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>