<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!--
<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>

	<a href="done.php">View</a>
	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>

-->


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Font Linking -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Css linking-->
    <link rel="stylesheet" type="text/css" href="Style.css">

    <title>	Space Travel Made Possible	</title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->

    <!--Navigation Bar-->

          <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Space Corp</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                  </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    
    <!--Carousel-->

           <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" class="container" ">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="Carousel\1.jpg" class="d-block w-100" alt="..." style="height: 400px;">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="Carousel\2.jpg" class="d-block w-100" alt="..." style="height: 400px;">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Carousel\3.jpg" class="d-block w-100" alt="..." style="height: 400px;">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <!-- Service Offered -->  
        <section id="Service_offered" class="container">
          <h1 class="text-center">Services Offered</h1>
          <hr>
          <div class="row">
            <div class="col-sm-4 services-column">
              <img src="Services Offered/computer.png" class="img-fluid img-responsive">
              <p class="Service-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. </p>
          </div>
            <div class="col-sm-4 services-column">
              <img src="Services Offered/class.png" class="img-fluid img-responsive">
              <p class="Service-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. </p>
          </div>
            <div class="col-sm-4 services-column">
              <img src="Services Offered/code.png" class="img-fluid img-responsive">
              <p class="Service-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. </p>
          </div>
          </div>
        </section>

    <!-- Gallery & Buy Now -->
        <section id="Gallery" class="container">
          <div class="row">
            <div class="col-sm-6 img-container">
              <img src="Gallery/1.jpg" class="img-fluid img-responsive" width="50%" >
            </div>

            <div class="col-sm-6 p">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 p">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
             <div class="col-sm-6 img-container">
              <img src="Gallery/1.jpg" class="img-fluid img-responsive" width="50%" >
            </div>
          </div>

          <div class="row">
             <div class="col-sm-6 img-container">
              <img src="Gallery/1.jpg" class="img-fluid img-responsive" width="50%" >
            </div>

            <div class="col-sm-6 p">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 p">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
             <div class="col-sm-6 img-container">
              <img src="Gallery/1.jpg" class="img-fluid img-responsive" width="50%" >
            </div>
          </div>

          <div>
            <button type="button" class="btn btn-outline-dark b" class="container"> <a href="logout.php">Logout</a></button>
          </div>

        </section>

    <!--Footer-->  

    <!--<footer>
      <div class="row">
          <div class="col-sm-4">
            <img src="Logo\logo.jpg" class=" img-fluid img-responsive">
          </div>
          <div class="col-sm-4">
           <ul>
              <li><a href="#">About</a></li>
              <li><a href="#">Privacy Policies</a></li>
              <li><a href="#">Terms And Conditions</a></li>
           </ul>
          </div>
          <div class="col-sm-4">
            <p> Phone: 101010101 </p>
            <p> Email: support@spacecorp.in </p>
          </div>
      </div>
    </footer>-->

      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted c">© 2021 Company, Inc</p>

        <!--<a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <img src="Logo\logo.png" class=" img-fluid img-responsive">
        </a>-->
        <div class="col-sm-4 img-container">
              <img src="Logo\logo.png" class="img-fluid img-responsive">
        </div>
        
        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item footer-link"><a href="#" class="nav-link px-2 text-muted">About</a></li>
          <li class="nav-item footer-link"><a href="#" class="nav-link px-2 text-muted">Privacy Policies</a></li>
          <li class="nav-item footer-link"><a href="#" class="nav-link px-2 text-muted">T&C</a></li>
        </ul>
        
      </footer> 

  </body>
</html>


