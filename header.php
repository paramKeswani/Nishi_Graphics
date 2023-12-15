<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Document</title>
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Popper.js -->


<!-- Bootstrap JS -->


<!-- Waypoints JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

<!-- Counter-Up JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>


<style>
    /* html {
  scroll-behavior: smooth;
}

ul {
      /* position: relative;
      width: 27em;
      height: 2em;
      margin: 100px auto;
      padding: 0;
      white-space: nowrap; */
    /* }

    ul li {
      display: inline;
      text-align: center;
    } */
/* ul li a { */
  /* position: relative;
  top: 0;
  left: 0;
  right: 25em;
  bottom: 0;
  display: inline-block;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: .4em .2em;
  color: #09C;
  text-decoration: none;
  text-shadow: 0 1px 0 white; */

  /*transition*/
  /* -webkit-transition: width .3s,left .3s;
  -moz-transition: width .3s,left .3s;
  -o-transition: width .3s,left .3s;
  transition: width .3s,left .3s; */
/* } */

/* ul li:nth-child(1) a { width: 2em; }
ul li:nth-child(2) a { width: 4em; }
ul li:nth-child(3) a { width: 4em; }
ul li:nth-child(4) a { width: 12em; }
ul li:nth-child(5) a { width: 5em; } */
/* 
ul li:nth-child(1) a { width: 8em; }
ul li:nth-child(2) a { width: 8em; }
ul li:nth-child(3) a { width: 8em; }
ul li:nth-child(4) a { width: 8em; }
ul li:nth-child(5) a { width: 8em; }
ul li:nth-child(6) a { width: 8em; }
ul li:nth-child(7) a { width: 8em; }

ul li:last-child a::after { */
  /* content: "";
  position: absolute;
  right: inherit;
  bottom: -3px;
  width: inherit;
  height: 3px;
  background: #ccc;
  pointer-events: none; */
  /*transition*/
  /* -webkit-transition: all .5s ease;
  -moz-transition: all .5s ease;
  -o-transition: all .5s ease;
  transition: all .5s ease; */
/* } */

/* ul li:nth-child(1) ~ li:last-child a {
  right: 25em;
  width: 2em;
}

ul li:nth-child(2):hover ~ li:last-child a {
  right: 21em;
  width: 4em;
} */

/* ul li:nth-child(1):hover ~ li:last-child a {
  right: 17em;
  width: 4em;
}
ul li:nth-child(2):hover ~ li:last-child a {
  right: 17em;
  width: 4em;
}
ul li:nth-child(3):hover ~ li:last-child a {
  right: 17em;
  width: 4em;
}
ul li:nth-child(4):hover ~ li:last-child a {
  right: 17em;
  width: 4em;
}
ul li:nth-child(5):hover ~ li:last-child a {
  right: 17em;
  width: 4em;
}

ul li:nth-child(6):hover ~ li:last-child a {
  right: 17em;
  width: 4em;
}
ul li:nth-child(7):hover ~ li:last-child a {
  right: 17em;
  width: 4em;
} */

/* ul li:nth-child(4):hover ~ li:last-child a {
  right: 5em;
  width: 12em;
}

ul li:nth-child(5):last-child:hover a {
  right: 0;
  width: 5em;
} */

/* ul li:hover ~ li:last-child a::after, */
/* ul li:last-child:hover a::after { background: #c351fa; } */

/* ul li:last-child a {
  min-width: 5em;
  max-width: 5em;
} */

ul li a:hover,
ul li a:focus {
  color: #c351fa;
  background-color: rgba(255,255,255,.6);

  /*transition*/
  /* -webkit-transition: width .3s,right .3s,background-color .3s;
  -moz-transition: width .3s,right .3s,background-color .3s;
  -o-transition: width .3s,right .3s,background-color .3s;
  transition: width .3s,right .3s,background-color .3s; */
}

/* ul li a:focus { border-bottom: 3px solid #c351fa; } */ */




</style>
    </head>
<body>
    <div class="container">
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top box-shadow justify-content-center" style="height: 12vh;">
        <div class="container">
            <a class="navbar-brand" style="color: white;" href="index2.php">Nishi Graphics</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" style="color: white;" aria-current="page" href="index2.php" style="width: 10%;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" style="color: white;" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="itservices.php">IT Services</a></li>
                            <li><a class="dropdown-item" href="repair.php">Repair Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" style="color: white;" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Sales
                        </a>
                        <ul class="dropdown-menu" style="color: white;">
                            <li><a class="dropdown-item" href="sales.php">New Sales</a></li>
                            <li><a class="dropdown-item" href="refurbished.php">Refurbished Laptops</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="clients.php">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="tandc.php">T & C</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white;" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Your content goes here -->

    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Logo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div>
            <h1>LOGO</h1>
            <hr>
            <h2>Nishi Graphics</h2>
            <br>
            <br>
            <p>#69, 2nd main road,<br> Tech City Layout, Electronic City <br>
                , Phase I, Bangalore - 560100</p>

            <br>
            <br>
            <h2>Phone Number</h2>
            <br>
            <p>080 - 2852 1102 <br>
                +91 99020 02788, 78999 34125</p>

            <br>
            <br>
            <h2>Email :</h2>
            <br>
            <p>info@wereachindia.com</p>
        </div>
    </div>

    <!-- Jumbotron -->
    <!-- Navbar -->
    </div>


  


    