<?php include("header.php") ?>

<head>
<link rel="stylesheet" href="index2.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<style>
@import url("https://fonts.googleapis.com/css?family=Montserrat&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

body {
    font-family: 'Poppins', sans-serif !important;
}

h1, h2 {
    font-family: "Montserrat Medium";
    max-width: 40ch;
    text-align: center;
    transform: scale(0.94);
    animation: scale 3s forwards cubic-bezier(0.5, 1, 0.89, 1);
}

@keyframes scale {
    100% {
        transform: scale(1);
    }
}

span {
    display: inline-block;
    opacity: 0;
    filter: blur(4px);
}

span:nth-child(1) {
    animation: fade-in 3s 0.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(2) {
    animation: fade-in 3s 0.2s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(3) {
    animation: fade-in 3s 0.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(4) {
    animation: fade-in 3s 0.4s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

@keyframes fade-in {
    100% {
        opacity: 1;
        filter: blur(0);
    }
}

.col-md-4 a {
  text-decoration: none;
}

.card-body h5
{
  color: black;
}

h5:hover {
  color:orange;
}




</style>

<div class="itservices">

<div class="name" style="display:flex;justify-content:center;">

<div style="color:orange;justify-content:center;">
        <span style="font-size:70px;">WeReach Infotech</span>
        <br>
        <span style="color: black;justify-content:left;font-size:100px;">IT Services</span>
    </div>

</div>

</div>

<div class="sixcards">
  <div class="container-fluid" style="">

    <div class="container justify-content-center  pb-2">
     
    </div>
    <div class="container justify-content-center pb-3 mt-5" style="font-size: large;">
     
    </div>
    <div class="container pt-5 pb-3">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-md-4">
         <a href="lan.php">
          <div class="div">
          <div class="card bg-image hover-zoom abc border-box" style="background-color: white;border-radius: 10px;overflow: hidden;">
            <div class="container"><img class="rounded bg-image hover-zoom img-fluid" src="https://wereachindia.com/wp-content/uploads/2023/10/Sales-Image-2.jpg" alt="Sales" style="transition: transform 0.4s ease; "></div>
            <div class="card-body">
              <h5 class="card-title" style="text-align: left;font-size: x-large;"><b>LAN / WAN Services</b></h5>
              <p class="card-text" style="text-align: left;font-size: x-large;">We assess your networking requirement and design and implement optimal networks to fulfill your current needs, future/expansion plans and existing technology.</p>
              <p style="text-align: left;font-size: x-large;"><a href="#">Read More</a></p>
            </div>
          </div>

          </div>
         
         </a>        </div>
        <div class="col-md-4">
         <a href="repairi.php">
          <div class="card bg-image hover-zoom abc border-box" style="background-color:white;border-radius: 10px;border-radius: 10px;">
           <div class="container"><img class="rounded bg-image hover-zoom img-fluid" src="https://wereachindia.com/wp-content/uploads/2023/09/Repairing-Services-Image-2.jpg" alt="Repair Services" style="transition: transform 0.4s ease;"></div> 
            <div class="card-body">
              <h5 class="card-title" style="text-align: left;font-size: x-large;"> <b>Repair Services</b></h5>
              <p class="card-text" style="text-align: left;font-size: x-large;">At our computer repair shop, we optimise IT services according to company needs and efficiently manage infrastructure by putting best practises into action.</p>
              <p style="text-align: left;font-size: x-large;"><a href="#">Read More</a></p>
            </div>
          </div></a>
        </div>
        <div class="col-md-4">
         <a href="upgradesi.php">
         <div class="card bg-image hover-zoom abc border-box" style="background-color: white;border-radius: 10px;font-size: x-large;">
          <div class="container"><img class="rounded bg-image hover-zoom img-fluid" src="https://wereachindia.com/wp-content/uploads/2023/09/Upgrades_Options.jpg" alt="Upgrades and Options" style="transition: transform 0.4s ease;"></div>  
            <div class="card-body" style="font-size: x-large;">
              <h5 class="card-title" style="text-align: left;font-size: x-large;"><b>Upgrades and Options</b></h5>
              <p class="card-text" style="text-align: left;font-size: x-large;">We provide buyback programmes, hardware upgrades, and technical support services, such as our computer service centre for thorough hardware and software maintenance.</p>
              <p style="text-align: left;font-size: x-large;"><a href="#">Read More</a></p>
            </div>
          </div>
         </a>
        </div>
      </div>
    </div>
  </div>



  <div class="b container-fluid" style="font-size: x-large;">
    <div class="container pt-5 pb-3">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-md-4">
          <a href="amci.php">
          <div class="card bg-image hover-zoom abc border-box" style="background-color: white;border-radius: 10px;font-size: x-large;">
            <div class="container"><img class="rounded bg-image hover-zoom img-fluid" src="https://wereachindia.com/wp-content/uploads/2023/09/AMC-Image-2.jpg" alt="Sales" style="transition: transform 0.4s ease;"></div>
            <div class="card-body">
              <h5 class="card-title" style="text-align: left;font-size: x-large;"><b>AMC</b></h5>
              <p class="card-text" style="text-align: left;font-size: x-large;">We provide top priority to efficiency, quality, and dependability in products. To further ensure excellent computer repair services, we also provide yearly maintenance plans for all kinds of PC.

              </p>
              <p style="text-align: left;font-size: x-large;"><a href="#">Read More</a></p>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="rentalsi.php">
          <div class="card bg-image hover-zoom abc border-box" style="background-color: white;border-radius: 10px;font-size: x-large;">
            <div class="container"><img class="rounded bg-image hover-zoom img-fluid" src="https://wereachindia.com/wp-content/uploads/2023/09/Rental-Image-3.jpg" alt="Repair Services" style="transition: transform 0.4s ease;"></div>
            <div class="card-body">
              <h5 class="card-title" style="text-align: left;font-size: x-large;"><b>Rentals</b></h5>
              <p class="card-text" style="text-align: left;font-size: x-large;">We offer top-notch computer rental equipment supported by our service and qualified technicians. Once rented, our laptop repair shop ensures maintenance for all products.</p>
              <p style="text-align: left;font-size: x-large;"><a href="#">Read More</a></p>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="facilityi.php">
          <div class="card bg-image hover-zoom abc border-box" style="background-color: white;border-radius: 10px;font-size: x-large;">
           <div class="container"><img class="rounded bg-image hover-zoom img-fluid" src="https://wereachindia.com/wp-content/uploads/2023/09/Facility-Management-Images-2.jpg" alt="Upgrades and Options" style="transition: transform 0.4s ease;"></div> 
            <div class="card-body">
              <h5 class="card-title" style="text-align: left;font-size: x-large;"><b>Facility Management</b></h5>
              <p class="card-text" style="text-align: left;font-size: x-large;">This particular service pack is designed for our current Facility Management Services clients that want extra help with IT, such as thorough computer repair services.</p>
              <p style="text-align: left;font-size: x-large;"><a href="#">Read More</a></p>
            </div>
          </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  
 



  


  
  
  






</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<?php include("footer.php")  ?>