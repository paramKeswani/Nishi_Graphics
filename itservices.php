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
.card-container {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
</style>



<div class="jumbotron jumbotron-fluid text-center text-light" style="height: 90vh; background-image: url('https://img.freepik.com/free-photo/data-technology-blue-background-with-hacker-remixed-media_53876-108534.jpg?size=626&ext=jpg&ga=GA1.1.246565403.1702462119&semt=ais'); background-size: cover;-webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(80%);">
    <div class="container-fluid h-100 d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-3 text-black text-center mb-4"> <span>IT</span> <span>SERVICES</span></h1>
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
        <span style="color: black;justify-content:left;font-size:70px;">IT Services</span>
    </div>

</div>

</div>

<div class="sixcards mb-5">
        <div class="container-fluid">
            <!-- ... (your existing code) ... -->

            <div class="container pt-5 pb-3">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- LAN / WAN Services -->
                    <div class="col-md-4">
                        <a href="lan.php" class="card-container">
                            <div class="card bg-image hover-zoom abc border-box" style="background-color: white;border-radius: 10px;overflow: hidden;">
                                <div class="container"><img class="rounded bg-image hover-zoom img-fluid" src="https://img.freepik.com/free-photo/young-man-engineer-making-program-analyses_1303-20401.jpg?size=626&ext=jpg&ga=GA1.1.246565403.1702462119&semt=ais" alt="Sales" style="transition: transform 0.4s ease;"></div>
                                <div class="card-body">
                                    <h5 class="card-title text-center" style="text-align: left;font-size: x-large;"><b>LAN / WAN Services</b></h5>
                                    <p class="card-text" style="text-align: left;font-size: x-large;">We assess your networking requirement and design and implement optimal networks to fulfill your current needs, future/expansion plans and existing technology.</p>
                             
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Repair Services -->
                    <div class="col-md-4">
                        <a href="repairi.php" class="card-container">
                            <div class="card bg-image hover-zoom abc border-box" style="background-color:white;border-radius: 10px;border-radius: 10px;">
                                <div class="container"><img class="rounded bg-image hover-zoom img-fluid" src="https://img.freepik.com/free-photo/technician-repairing-computer-computer-hardware-repairing-upgrade-technology_1150-8861.jpg?size=626&ext=jpg&ga=GA1.1.246565403.1702462119&semt=ais" alt="Repair Services" style="transition: transform 0.4s ease;"></div>
                                <div class="card-body">
                                    <h5 class="card-title text-center" style="text-align: left;font-size: x-large;"><b>Repair Services</b></h5>
                                    <p class="card-text" style="text-align: left;font-size: x-large;">At our computer repair shop, we optimize IT services according to company needs and efficiently manage infrastructure by putting best practices into action.</p>
                             
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Upgrades and Options -->
                    <div class="col-md-4">
                        <a href="upgradesi.php" class="card-container">
                            <div class="card bg-image hover-zoom abc border-box" style="background-color: white;border-radius: 10px;font-size: x-large;">
                                <div class="container"><img class="rounded bg-image hover-zoom img-fluid" src="https://img.freepik.com/free-photo/lastest-version-fresh-updates-application-updates-concept_53876-123756.jpg?size=626&ext=jpg&ga=GA1.1.246565403.1702462119&semt=ais" alt="Upgrades and Options" style="transition: transform 0.4s ease;"></div>
                                <div class="card-body" style="font-size: x-large;">
                                    <h5 class="card-title text-center" style="text-align: left;font-size: x-large;"><b>Upgrades and Options</b></h5>
                                    <p class="card-text" style="text-align: left;font-size: x-large;">We provide buyback programs, hardware upgrades, and technical support services, such as our computer service center for thorough hardware and software maintenance.</p>
                             
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="b container-fluid" style="font-size: x-large;">
                <div class="container pt-5 pb-3">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <!-- AMC -->
                        <div class="col-md-4">
                            <a href="amci.php" class="card-container">
                                <div class="card bg-image hover-zoom abc border-box" style="background-color: white;border-radius: 10px;font-size: x-large;">
                                    <div class="container"><img class="rounded bg-image hover-zoom img-fluid" src="https://img.freepik.com/free-photo/attention-this-part-polygraph-examiner-works-office-with-his-lie-detector-s-equipment_146671-17272.jpg?size=626&ext=jpg&ga=GA1.1.246565403.1702462119&semt=ais" alt="Sales" style="transition: transform 0.4s ease;"></div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center" style="text-align: left;font-size: x-large;"><b>AMC</b></h5>
                                        <p class="card-text" style="text-align: left;font-size: x-large;">We provide top priority to efficiency, quality, and dependability in products. To further ensure excellent computer repair services, we also provide yearly maintenance plans for all kinds of PC.</p>
                              
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Rentals -->
                        <div class="col-md-4">
                            <a href="rentalsi.php" class="card-container">
                                <div class="card bg-image hover-zoom abc border-box" style="background-color: white;border-radius: 10px;font-size: x-large;">
                                    <div class="container"><img class="rounded bg-image hover-zoom img-fluid" src="https://img.freepik.com/free-photo/close-up-person-working-call-center_23-2149288220.jpg?size=626&ext=jpg&ga=GA1.1.246565403.1702462119&semt=ais" alt="Repair Services" style="transition: transform 0.4s ease;"></div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center" style="text-align: left;font-size: x-large;"><b>Rentals</b></h5>
                                        <p class="card-text" style="text-align: left;font-size: x-large;">We offer top-notch computer rental equipment supported by our service and qualified technicians. Once rented, our laptop repair shop ensures maintenance for all products.</p>
                                        
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Facility Management -->
                        <div class="col-md-4">
                            <a href="facilityi.php" class="card-container">
                                <div class="card bg-image hover-zoom abc border-box" style="background-color: white;border-radius: 10px;font-size: x-large;">
                                    <div class="container"><img class="rounded bg-image hover-zoom img-fluid" src="https://img.freepik.com/free-photo/unrecognizable-man-neon-safety-vest-business-suit-sitting-desk-using-laptop_1098-17504.jpg?size=626&ext=jpg&ga=GA1.1.246565403.1702462119&semt=ais" alt="Upgrades and Options" style="transition: transform 0.4s ease;"></div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center" style="text-align: left;font-size: x-large;"><b>Facility Management</b></h5>
                                        <p class="card-text" style="text-align: left;font-size: x-large;">This particular service pack is designed for our current Facility Management Services clients that want extra help with IT, such as thorough computer repair services.</p>
                                        
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

  


  
  
  






<?php include("footer.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



