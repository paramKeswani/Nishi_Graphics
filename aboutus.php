<?php include("header.php"); ?>

<style>
@import url("https://fonts.googleapis.com/css?family=Montserrat&display=swap");

* {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    .aone {
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      opacity: 0;
      transition: opacity 1s;
    }

    .aone.fade-in {
      opacity: 1;
    }

    h1,
    h2 {
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

    /* Add more styles for spans if needed */

    body {
      font-family: 'Montserrat', sans-serif;
    }

    .abc {
      padding-top: 150px;
    }

    h2 {
      text-align: center;
      padding: 20px;
    }
</style>



<div class="container aboutus" style="background-color: white;">
  <div class="container" style="margin-left: 10px; margin-right: 10px;">

    <!-- First row with image on the left and paragraph on the right -->
    <div class="row">
      <div class="col-sm-6">
        <img class="pb-5 mb-5 img-fluid" src="https://wereachindia.com/wp-content/uploads/2023/10/quote-image-768x866.webp" alt="" style="max-width: 100%; margin-top: -40px;">
      </div>
      <div class="col-sm-6 text-start">
        <h2 class="one" style="color: black;"><b><span>WHO</span> <span>WE</span> <span>ARE</span></b></h2>
        <br>
        <p style="font-size: 15px; color: black;">WeReach Infotech is an information technology hardware solution company established in the year 2004 in Bangalore, India. Offering high quality and cost-effective laptop & computer repair services and network solutions. We support a wide range of businesses in many industries and verticals, leverage our experience to keep everything running smoothly so your business can focus on what it does best.</p>
        <br>
        <p style="font-size: 15px; color: black;"> <span style="color:orange;">WeReach Infotech</span> specializes in delivering a wide range of IT solutions to our clients. Our team embodies a diverse range of talents and technical skills that can devise a solution that best fits your business requirements.</p>
      </div>
    </div>

    <!-- Second row with paragraph on the left and image on the right -->
    <div class="row">
      <div class="col-sm-6 text-start">
        <h2 style="color: black;"><b>Our Mission</b></h2>
        <br>
        <p style="font-size: 15px;color: black;">To provide comprehensive analysis, creative strategies and reliable, pragmatic solutions to our clients. Efficient and effective IT solutions are key to the success of a business. With technology moving at a fast pace, it can sometimes be a challenge keeping up with the latest technologies and finding the most cost-effective solutions for your business needs.</p>
        <p style="font-size: 15px;color: black;">With managed IT support, we take complete care and responsibility for your overall IT infrastructure, business requirements and your day-to-day maintenance with exceptional customer service.</p>
      </div>
      <div class="col-sm-6">
        <img class="pb-5 mb-5 img-fluid" src="https://wereachindia.com/wp-content/uploads/2023/10/25-1.jpg" alt="" style="max-width: 100%;">
      </div>
    </div>

    <!-- Third row with image on the left and paragraph on the right -->
    <div class="row">
      <div class="col-sm-6">
        <img class="pb-5 mb-5 img-fluid" src="https://wereachindia.com/wp-content/uploads/2023/10/shutterstock_680153554-768x513.jpg" alt="" style="max-width: 90%;">
      </div>
      <div class="col-sm-6 text-start">
        <h2 class="one" style="color: black;"><b>Our Vision</b></h2>
        <br>
        <p style="font-size: 15px; color: black;">To provide the high quality & most-effective laptop, desktop computer and network solutions and services.</p>
        <br>
        <p style="font-size: 15px; color: black;">At WeReach Infotech, we are proud to provide a wide variety of small, medium and large-sized businesses with a full range of IT services particularly those organisations who wish to outsource their IT services in Bangalore.</p>
        <br>
        <p style="font-size: 15px; color: black;">We provide the best laptop and computer rental equipment available backed by our service and qualified engineers. We offer short term to long term rentals tailored to fit your needs.</p>
      </div>
    </div>

  </div>
  <div class="container pt-5"></div>

<div class="aone">

<h1 style="color: black;">
  <span>Brands</span>
  <span>We</span>
  <span>Service</span>
            </h1>
  <h2 style="color: black;"><span><br></span>
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


<?php include("footer.php"); ?>



<!-- 
   -->

