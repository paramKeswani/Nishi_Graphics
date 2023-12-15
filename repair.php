<?php include("header.php"); ?>



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

<div class="jumbotron jumbotron-fluid text-center text-light" style="height: 90vh; background-image: url('https://img.freepik.com/free-photo/checking-current-laptop-circuit-board_1098-13759.jpg?size=626&ext=jpg&ga=GA1.1.246565403.1702462119&semt=ais'); background-size: cover;-webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(80%);">
    <div class="container-fluid h-100 d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-3 text-black text-center mb-4"> <span>REPAIR</span> <span>SERVICES</span></h1>
        <!-- <h1 class="display-3 text-white mb-4"> <span>Repair</span> <span>Service</span> </h1> -->
        
    </div>
</div>
    <div class="pt-5"></div>
<div class="pt-5"></div>
<div class="itservices">


<div class="name" style="display:flex;justify-content:left;margin-left:10%;">

<div style="color:orange;justify-content:center;">
        <span style="font-size:50px;">Nishi Graphics</span>
        <br>
        <span style="color: black;justify-content:left;font-size:70px;">Repair Service</span>
    </div>

</div>

</div>

<div class="sixcards">
  <div class="container-fluid" style="">

   
    <div class="container pt-5 pb-3">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-md-4 h-100">
         <a href="lmi.php">
          <div class="div">
          <div class="card bg-image hover-zoom abc border-box h-100" style="background-color: white;border-radius: 10px;overflow: hidden;">
            <div class="container"><img class="rounded bg-image hover-zoom img-fluid" src="https://img.freepik.com/free-photo/overhead-view-man-repairing-computer-hardware-equipment_23-2147883769.jpg?size=626&ext=jpg&ga=GA1.1.246565403.1702462119&semt=ais" alt="Sales" style="transition: transform 0.4s ease; "></div>
            <div class="card-body h-100">
              <h5 class="card-title" style="text-align: left;font-size: x-large;"><b>Laptop Motherboard</b></h5>
              <p class="card-text" style="text-align: left;font-size: x-large;">The motherboard serves as the core hub and is crucial to computer repair services. It plugs into all other parts and accessories, enabling smooth information sharing between them.</p>

            </div>
          </div>

          </div>
         
         </a>        </div>
        <div class="col-md-4">
         <a href="lki.php">
          <div class="card bg-image hover-zoom abc border-box h-100" style="background-color:white;border-radius: 10px;border-radius: 10px;">
           <div class="container"><img class="rounded bg-image hover-zoom img-fluid" src="https://img.freepik.com/free-photo/keyboard-mouse-table_93675-128790.jpg?size=626&ext=jpg&ga=GA1.1.246565403.1702462119&semt=ais" alt="Repair Services" style="transition: transform 0.4s ease;"></div> 
            <div class="card-body">
              <h5 class="card-title" style="text-align: left;font-size: x-large;"> <b>Laptop Keyboard</b></h5>
              <p class="card-text" style="text-align: left;font-size: x-large;">It's impossible to work on a laptop with inoperable or sticky keys. Let Broken Laptop Repair, experts in computer repair services, replace your keyboard, restoring it to feel brand new.</p>
             
            </div>
          </div></a>
        </div>
        <div class="col-md-4">
         <a href="lhdi.php">
         <div class="card bg-image hover-zoom abc border-box h-100" style="background-color: white;border-radius: 10px;font-size: x-large;">
          <div class="container"><img class="rounded bg-image hover-zoom img-fluid" src="https://img.freepik.com/free-photo/hard-disk-with-blue-light-high-angle_23-2149413364.jpg?size=626&ext=jpg&ga=GA1.1.246565403.1702462119&semt=ais" alt="Upgrades and Options" style="transition: transform 0.4s ease;"></div>  
            <div class="card-body" style="font-size: x-large;">
              <h5 class="card-title" style="text-align: left;font-size: x-large;"><b>Laptop Hard Disk</b></h5>
              <p class="card-text" style="text-align: left;font-size: x-large;">Before offering a solution, the data recovery specialists at a laptop repair shop examine the hard drive to identify the fault. They frequently spot logical issues, even those involving software.</p>
             
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
          <a href="leri.php">
          <div class="card bg-image hover-zoom abc border-box h-100" style="background-color: white;border-radius: 10px;font-size: x-large;">
            <div class="container"><img class="rounded bg-image hover-zoom img-fluid" src="https://img.freepik.com/free-photo/professional-is-working-his-lab-repair-clean-computer-laptop-toolkit-box-with-specific-instruments-near_346278-1802.jpg?size=626&ext=jpg&ga=GA1.1.246565403.1702462119&semt=ais" alt="Sales" style="transition: transform 0.4s ease;"></div>
            <div class="card-body">
              <h5 class="card-title" style="text-align: left;font-size: x-large;"><b>Laptop Enclouser repair</b></h5>
              <p class="card-text" style="text-align: left;font-size: x-large;">The portability of a laptop is useful, but it causes wear. Have you noticed any scratches or signs of wear on your laptop or notebook? Our laptop repair service specialised in fixing the damage of lids, covers, and bottom cases. Renew your device using our support!
              </p>
             
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="lbai.php">
          <div class="card bg-image hover-zoom abc border-box h-100" style="background-color: white;border-radius: 10px;font-size: x-large;">
            <div class="container"><img class="rounded bg-image hover-zoom img-fluid" src="https://img.freepik.com/free-photo/desk-with-ssd-laptop-top-view_23-2149328276.jpg?size=626&ext=jpg&ga=GA1.1.246565403.1702462119&semt=ais" alt="Repair Services" style="transition: transform 0.4s ease;"></div>
            <div class="card-body">
              <h5 class="card-title" style="text-align: left;font-size: x-large;"><b>Laptop Battery & Adapters</b></h5>
              <p class="card-text" style="text-align: left;font-size: x-large;">Occasionally the power switch assembly on a laptop will break, which means the user cannot power up or use the laptop! If your have a broken laptop power button, Broken Laptop Repair can help.</p>
             
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="ledi.php">
          <div class="card bg-image hover-zoom abc border-box h-100" style="background-color: white;border-radius: 10px;font-size: x-large;">
           <div class="container"><img class="rounded bg-image hover-zoom img-fluid" src="https://img.freepik.com/free-photo/close-up-hands-plugging-ssd-device_23-2149328274.jpg?size=626&ext=jpg&ga=GA1.1.246565403.1702462119&semt=ais" alt="Upgrades and Options" style="transition: transform 0.4s ease;"></div> 
            <div class="card-body">
              <h5 class="card-title" style="text-align: left;font-size: x-large;"><b>Laptop External Drives</b></h5>
              <p class="card-text" style="text-align: left;font-size: x-large;">The CD/DVD drive on your laptop is necessary for loading programs, playing DVDs and CDs, copying files and more. If your CD/DVD drive is not reading, writing or performing the tasks it was meant to do we can replace the drive so you can use the laptop.

</p>
             
            </div>
          </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  









<?php include("footer.php"); ?>