<?php include("header.php"); ?>
<div class="pt-2"></div>
<style>
    .col-md-3{
        border:2px solid orange;
        border-radius: 5px;

    }
</style>
<style>
  .jumbotron  h1, h2 {
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
<div class="jumbotron jumbotron-fluid text-center text-light" style="height: 90vh; background-image: url('https://img.freepik.com/free-photo/checking-current-laptop-circuit-board_1098-13759.jpg?size=626&ext=jpg&ga=GA1.1.246565403.1702462119&semt=ais'); background-size: cover;-webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(80%);">
    <div class="container-fluid h-100 d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-3 text-black text-center mb-4"> <span>Clients</span></h1>
        <!-- <h1 class="display-3 text-white mb-4"> <span>Repair</span> <span>Service</span> </h1> -->
        
    </div>
</div>
    <div class="pt-5"></div>
<div class="pt-5"></div>
<div class="container" style="display:flex; justify-content: space-between; align-items: flex-start;">

    <div class="col-md-3 "> <img src="https://wereachindia.com/wp-content/uploads/2023/09/WhatsApp-Image-2023-09-27-at-12.44.33-PM.jpeg" alt=""><!-- Your content here --></div>
    <div class="col-md-3 "><img src="https://wereachindia.com/wp-content/uploads/2023/09/WhatsApp-Image-2023-09-27-at-12.44.58-PM.jpeg" alt=""> <!-- Your content here --></div>
    <div class="col-md-3 "><img src="https://wereachindia.com/wp-content/uploads/2023/09/WhatsApp-Image-2023-09-27-at-12.45.08-PM.jpeg" alt=""> <!-- Your content here --></div>
</div>
<div class="pt-3"></div>
<div class="container" style="display:flex; justify-content: space-between; align-items: flex-start;">

<div class="col-md-3 "> <img src="https://wereachindia.com/wp-content/uploads/2023/09/WhatsApp-Image-2023-09-27-at-12.44.33-PM.jpeg" alt=""><!-- Your content here --></div>
<div class="col-md-3 "><img src="https://wereachindia.com/wp-content/uploads/2023/09/WhatsApp-Image-2023-09-27-at-12.44.58-PM.jpeg" alt=""> <!-- Your content here --></div>
<div class="col-md-3 "><img src="https://wereachindia.com/wp-content/uploads/2023/09/WhatsApp-Image-2023-09-27-at-12.45.08-PM.jpeg" alt=""> <!-- Your content here --></div>
</div>

<div class="pt-3"></div>

<div class="container" style="display:flex; justify-content: space-between; align-items: flex-start;">

    <div class="col-md-3 "> <img src="https://wereachindia.com/wp-content/uploads/2023/09/WhatsApp-Image-2023-09-27-at-12.44.33-PM.jpeg" alt=""><!-- Your content here --></div>
    <div class="col-md-3 "><img src="https://wereachindia.com/wp-content/uploads/2023/09/WhatsApp-Image-2023-09-27-at-12.44.58-PM.jpeg" alt=""> <!-- Your content here --></div>
    <div class="col-md-3 "><img src="https://wereachindia.com/wp-content/uploads/2023/09/WhatsApp-Image-2023-09-27-at-12.45.08-PM.jpeg" alt=""> <!-- Your content here --></div>
</div>




<?php include("footer.php"); ?>