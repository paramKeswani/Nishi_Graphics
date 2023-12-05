<?php
include("header.php");
?>
<style>
    @import url("https://fonts.googleapis.com/css?family=Montserrat&display=swap");

* {
  padding: 0;
  margin: 0;
}

.aone {
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

h1 ,h2 {
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
  animation: fade-in 0.8s 0.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(2) {
  animation: fade-in 0.8s 0.2s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(3) {
  animation: fade-in 0.8s 0.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(4) {
  animation: fade-in 0.8s 0.4s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(5) {
  animation: fade-in 0.8s 0.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(6) {
  animation: fade-in 0.8s 0.6s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(7) {
  animation: fade-in 0.8s 0.7s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(8) {
  animation: fade-in 0.8s 0.8s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(9) {
  animation: fade-in 0.8s 0.9s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(10) {
  animation: fade-in 0.8s 1s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(11) {
  animation: fade-in 0.8s 1.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(12) {
  animation: fade-in 0.8s 1.2s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(13) {
  animation: fade-in 0.8s 1.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(14) {
  animation: fade-in 0.8s 1.4s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(15) {
  animation: fade-in 0.8s 1.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(16) {
  animation: fade-in 0.8s 1.6s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(17) {
  animation: fade-in 0.8s 1.7s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(18) {
  animation: fade-in 0.8s 1.8s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(19) {
  animation: fade-in 0.8s 1.9s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(20) {
  animation: fade-in 0.8s 2.0s forwards cubic-bezier(0.11, 0, 0.5, 0);
}
span:nth-child(21) {
  animation: fade-in 0.8s 2.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
}
span:nth-child(22) {
  animation: fade-in 0.8s 2.2s forwards cubic-bezier(0.11, 0, 0.5, 0);
}
span:nth-child(23) {
  animation: fade-in 0.8s 2.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
}
span:nth-child(24) {
  animation: fade-in 0.8s 2.4s forwards cubic-bezier(0.11, 0, 0.5, 0);
}
span:nth-child(25) {
  animation: fade-in 0.8s 2.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
}
span:nth-child(26) {
  animation: fade-in 0.8s 2.6s forwards cubic-bezier(0.11, 0, 0.5, 0);
}
span:nth-child(27) {
  animation: fade-in 0.8s 2.7s forwards cubic-bezier(0.11, 0, 0.5, 0);
}
span:nth-child(28) {
  animation: fade-in 0.8s 2.8s forwards cubic-bezier(0.11, 0, 0.5, 0);
}
@keyframes fade-in {
  100% {
    opacity: 1;
    filter: blur(0);
  }
}
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
body{
    font-family: 'Poppins', sans-serif !important;
    background: #eff3f8;
}
.abc{
    padding-top: 150px;
}
h2{
    text-align: center;
    padding: 20px;
}
.slick-slide{
    margin: 0 20px;
}
.slick-slide img{
    width: 100%;
}
.slick-slider{
    position: relative;
    display: block;
    box-sizing: border-box;
}
.slick-list{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-track{
    position: relative;
    top: 0;
    left: 0;
    display: block
}
.slick-slide{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
.slick-slide img{
    display: block;
}
.slick-initialized .slick-slide{
    display: block;
}
.copy{
    padding-top: 250px;
}
</style>



    <div class="container">
    <div class="row">
        <div class="col-6" style="display: inline-block;">
            <img src="https://wereachindia.com/wp-content/uploads/2023/10/quote-image-768x866.webp" alt="" class="align-elements-center img-fluid" style="height: 90vh;">
        </div>

        <div class="col-lg-6 pt-5">
            <h2 class="justify-content-center">WHO WE ARE</h2>
            <p style="font-size: large;">WeReach Infotech is an information technology hardware solution company established in the year 2004 in Bangalore, India. Offering high-quality and cost-effective laptop & computer repair services and network solutions. We support a wide range of businesses in many industries and verticals, leveraging our experience to keep everything running smoothly so your business can focus on what it does best.</p>

            <p style="font-size: large;">WeReach Infotech specializes in delivering a wide range of IT solutions to our clients. Our team embodies a diverse range of talents and technical skills that can devise a solution that best fits your business requirements.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6 pt-5 px-4">
            <h2 class="justify-content-center">Our Mission</h2>
            <p style="font-size: large;">To provide comprehensive analysis, creative strategies and reliable, pragmatic solutions to our clients. Efficient and effective IT solutions are key to the success of a business. With technology moving at a fast pace, it can sometimes be a challenge keeping up with the latest technologies and finding the most cost-effective solutions for your business needs.</p>

            <p style="font-size: large;">With managed IT support, we take complete care and responsibility for your overall IT infrastructure, business requirements, and your day-to-day maintenance with exceptional customer service.</p>
        </div>
        <div class="col-lg-6 pt-5">
            <img class="justify-elements-center" src="https://wereachindia.com/wp-content/uploads/2023/10/25-1.jpg" alt="" class="align-elements-center img-fluid" style="height: 50vh;">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-6" style="display: inline-block;">
            <img class="justify-elements-center pt-2" src="https://wereachindia.com/wp-content/uploads/2023/10/shutterstock_680153554-768x513.jpg" alt="" class="align-elements-center img-fluid" style="height: 50vh;">
        </div>

        <div class="col-lg-6 pb-5">
            <h2 class="justify-content-center">Our Vision</h2>
            <p style="font-size: large;">To provide the high quality & most-effective laptop, desktop computer and network solutions and services.</p>
            <br>
            <p style="font-size: large;">At WeReach Infotech, we are proud to provide a wide variety of small, medium and large-sized businesses with a full range of IT services particularly those organizations who wish to outsource their IT services in Bangalore.</p>
            <br>
            <p style="font-size: large;">We provide the best laptop and computer rental equipment available backed by our service and qualified engineers. We offer short term to long term rentals tailored to fit your needs.</p>
        </div>
    </div>
</div>





<div class="aone">

<h1>
  <span>Brands</span>
  <span>We</span>
  <span>Service</span>
            </h1>
  <h2><span><br></span>
  <span>We</span>
  <span>fix</span>
  <span>every</span>
  <span>laptop</span>
  <span>and</span>
  <span>desktop</span>
  <span>in</span>
  <span>marketplace ,</span>
  <span>as</span>
  <span>well</span>
  <span>as</span>
  <span>all</span>
  <span>the</span>
  <span>famous</span>
  <span>named</span>
  <span>brands</span>
  <span>Dell ,</span>
  <span>HP ,</span>
  <span>Lenovo ,</span>
  <span>Compaq ,</span>
  <span>IBM ,</span>
  <span>Toshiba ,</span>
  <span>Acer ,</span>
  <span>Sony ,</span>
  <span>Asus </span>
  <span>and</span>
  <span>More</span>
</h2>


</div>

<!-- slider of logos-->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

<div class="abc">
        <h2 class="text-center font-weight-bold">Our Partners</h2>
        <section class="customer-logos slider">
            <div class="slide"><img src="adidas.png" alt="logo"></div>
            <div class="slide"><img src="facebook.png" alt="logo"></div>
            <div class="slide"><img src="google.png" alt="logo"></div>
            <div class="slide"><img src="instagram.png" alt="logo"></div>
            <div class="slide"><img src="nike.png" alt="logo"></div>
            <div class="slide"><img src="twitter.png" alt="logo"></div>
            <div class="slide"><img src="uber.png" alt="logo"></div>
            <div class="slide"><img src="youtube.png" alt="logo"></div>
        </section>
    </div>

    <?php
    include "footer.php";
    ?>



