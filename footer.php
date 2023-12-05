<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
        .navbar-nav > li{
      padding-left:20px;
      padding-right:20px;
    }
    
    .navbar-brand{
      padding-left:25px;
      padding-right:0px;
    }
    *{
        margin :0;
        padding: 0;
        font-family: "Source serif Pro";
    }
    .jumbotron
    {
        background-image: url("");
        height: 80vh;
        background-size: cover;
        background-position:center;
        color: white;
        border-radius: 0px!important;

    }

    .img
{
  overflow: hidden;
}

    .jumbotron h1
    {
        margin: 30px 0;
        font-size: 30px;
        line-height: 1.5;

    }
    .intro
    {
        padding-top: 60px;
    }
.card
{
    padding :1.5em .5em .5em;
    text-align: center;
    border-radius: 2em;
    box-shadow: 0 5px 10px rgba(0, 0, 0, .2);

}



.abc img{
  transition: all 1.07s ;
}
.abc:hover img
{
  transform :scale(1.07);
}

.counter-up
{
  background: red;
  min-height: 50vh;

  display: flex;
  align-items:center;

}

.counter-up .content
{
  display :flex;
  border: rgba(255, 255, 255, 0.6);
  width :100%;
  height:100%;
  align-items: center;
  justify-content:space-between;
  background: url("https://www.shutterstock.com/shutterstock/videos/21485134/thumb/1.jpg?ip=x480") no-repeat;
background-size: cover;
position: relative;
}

.counter-up::before{
  position :absolute;
  content:"";
  top: 0;
  left:0 ;
  height: 100%;
  width: 100%;

  flex-wrap: wrap;

}

.content .box
{
width: calc(10% -30px);
border: 1px dashed white;
border-radius: 5px;
padding: 20px;
display: flex;
justify-content:space-evenly;
color: white;
flex-direction: column;
padding-right: 10px;
padding-left: 10px;
margin-left: 30px;
margin-right: 30px;



}

.content .box .icon
{
  font-size: 25px;
  color: white;
}

.content .box .counter-up{
  font-size: 50px;
  color: #f2f2f2;
  font-weight: 500;
  font-family: sans-serif;
}

.content .box .text 
{
  color: #ccc;
  font-weight: 400;

}

@media (max-width:1036px)
{
  .content-up
  {
    padding: 50px 50px 0 50px;
  }
  .content.box{
    width:calc(50%-30px);
    margin-bottom:50px;
  }
}

body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

header {
    text-align: center;
    padding: 20px;
}

.counters {
    height: 25vh;
    width: 100%;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    display: flex;
    justify-content: space-around;
    align-items: center;
    width: 80%;
}

.counters div {
    text-align: center;
    padding: 20px;
}

.counter {
    font-size: 2em;
    font-weight: bold;
}

h3 {
    margin-top: 10px;
}


.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

/* p,h1,h2,h3,h4,h5
{
  color: white;
} */
/* Add any other styles you need */
.triangle_1 {
    width: 50%;
    height: 200px;
    background: linear-gradient(to bottom left, #fff 0%, #fff 50%, orange 50%, orange 100%);
}

.triangle_2 {
    width: 50%; /* Added colon here */
    height: 200px;
    background: linear-gradient(to bottom right, #fff 0%, #fff 50%,orange 50%,orange 100%);
}

.xyz
{
  margin: 0;
  padding: 0;
}

  /* Button Styles */
  button {
    background-color: goldenrod;
    color: black;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  button:hover {
    background-color: darkorange;
    color: white;
  }

  /* Title Styles */
  h2, h3 {
    color: #333; /* Change to your preferred title color */
  }

  /* Paragraph Styles */
  p {
    color: #555; /* Change to your preferred paragraph color */
    font-size: 16px;
  }
  .footer,.man_thing,.sixcards {
  width:100%;
  min-height: 100vh;
  position: relative;
}

.counter{
    color: #fff;
    font-family: 'Poppins', sans-serif;
    text-align: center;
    width: 200px;
    padding: 0 0 45px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}
.counter:before,
.counter:after{
    content: '';
    background-color: #05BCC0;
    height: calc(100% - 120px);
    width: 100%;
    border-radius: 0 0 20px 20px;
    position: absolute;
    left: 0;
    bottom: 20px;
    z-index: -1;
}
.counter:after{
    width: 30px;
    height: 30px;
    border-radius: 0;
    transform: translateX(-50%) rotate(45deg);
    bottom: 6px;
    left: 50%;
}
.counter .counter-value{
    color: #05BCC0;
    background: linear-gradient(#f9f9f9 50%,#f2f2f2 50%);
    font-size: 45px;
    font-weight: 600;
    line-height: 200px;
    width: 200px;
    height: 200px;
    margin: 0 auto 20px;
    border-radius: 50%;
    box-shadow: 0 -5px 0 rgba(255,255,255,0.8),0 10px 10px rgba(0, 0, 0, 0.3);
    display: block;
}
.counter h3{
    font-size: 17px;
    font-weight: 500;
    text-transform: capitalize;
    margin: 0 10px;
}
.counter.red:before,
.counter.red:after{
    background-color: #F9605A;
}
.counter.red .counter-value{ color: #F9605A; }
@media screen and (max-width:990px){
    .counter{ margin-bottom: 40px; }
}

.counter.green:before,
.counter.green:after{
    background-color: rgb(128, 228, 131);
}
.counter.red .counter-value{ color: rgb(128, 228, 131); }
@media screen and (max-width:990px){
    .counter{ margin-bottom: 40px; }
}
.counter.red:before,
.counter.red:after{
    background-color:#e7ea27;
}
.counter.yellow .counter-value{ color:  #e7ea27; }
@media screen and (max-width:990px){
    .counter{ margin-bottom: 40px; }
}   
.counter.yellow .counter-value{ color: #e7ea27; }
@media screen and (max-width:990px){
    .counter{ margin-bottom: 40px; }
}
.counter.orange:before,
.counter.orange:after{
    background-color: #eead21;
}
.counter.orange .counter-value{ color:  #eead21; }
@media screen and (max-width:990px){
    .counter{ margin-bottom: 40px; }
}   

nav a:hover {
color: #f4db1e;
background-color: #000000;
}





</style>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<body>
          <!-- Footer -->
<div class="footer">
  <div class="container-fluid pt-5"></div>
  <div class="container-fluid pt-5"></div>
  


  <div class="container-fluid   xyz " style="background-color: orange;">

    <div class="triangle" style="display:flex;justify_content:flex-end;">
      <div class="triangle_1">
      
          </div>
          <div class="triangle_2">
      
          </div>
          </div>

  </div>



<footer class="text-center text-lg-start bg-body-tertiary text-muted " style="background-color: orange;">
<!-- Section: Social media -->
<!-- Section: Social media -->

<!-- Section: Links  -->
<section class="" style="background-color: orange;">
<div class="container text-center text-md-start " style="background-color: orange;">
  <!-- Grid row -->
  <div class="row mt-3" style="background-color: orange;">
    <!-- Grid column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" style="background-color: orange;">
      <!-- Content -->
      <h6 class="text-uppercase fw-bold mb-4" style="background-color: orange;">
        <i class="fas fa-gem me-3"></i>WeReach
      </h6>
      <p>
        WeReach Infotech specialises in delivering a 
         wide range of IT solutions to our clients.


      </p>
      <div>
        <!-- Facebook -->
        
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-google"></a>
        <a href="#" class="fa fa-linkedin"></a>
        </a>

<!-- Pinterest -->
                  </div>
  
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="background-color: orange;">
      <!-- Links -->
      <h6 class="text-uppercase fw-bold mb-4">
        Our Company
      </h6>
      <p>
        <a href="aboutus.php" class="text-reset">About us</a>
      </p>
      <p>
        <a href="client.php" class="text-reset">Client</a>
      </p>
      <p>
        <a href="T & C.php" class="text-reset">T & C</a>
      </p>
      <p>
        <a href="Contactus.php" class="text-reset">Contact Us</a>
      </p>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" style="background-color: orange;">
      <!-- Links -->
      <h6 class="text-uppercase fw-bold mb-4">
        Useful links
      </h6>
      <p>
        <a href="ITservices.php" class="text-reset">IT services</a>
      </p>
      <p>
        <a href="Repairservices.php" class="text-reset">Repair Services</a>
      </p>
      <p>
        <a href="Newsales.php" class="text-reset">New sales</a>
      </p>
      <p>
        <a href="Refurbishedlaptops.php" class="text-reset">Refurbished Lpatops</a>
      </p>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 " style="background-color: orange;">
      <!-- Links -->
      <h6 class="text-uppercase fw-bold mb-4"> <h3>Keep in touch</h3></h6>
      <p> <br>Our expertise, well as our passion for IT Solutions,<br> sets us apart from other agencies.

      </p>
      <p>
        <div class="email " style="display: flex; justify-content: space-evenly;"><div class="email-act" style="border: white;"><input type="email" name="" id="" placeholder="Email Address Here " ></div> <div class="button"><button class="btn  btn-primary"><i class="fa-solid fa-paper-plane"></i></button></div></div>
      
      </p>

    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
</div>
</section>
<!-- Section: Links  -->

<!-- Copyright -->
<div class="text-center p-4" style="background-color: orange;">
© 2023 Copyright:
<a class="text-reset fw-bold" href="">WeReachIndia @ 2023.All Rights Reserved.</a>
</div>
<!-- Copyright -->
</footer>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
</body>
</html>