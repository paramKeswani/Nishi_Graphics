<?php include("header.php"); ?>

<style>
@import url("https://fonts.googleapis.com/css?family=Montserrat&display=swap");

* {
  padding: 0;
  margin: 0;
}

/* Add this CSS to your existing styles */

.row .zero {
  height: 100%;
  width: 100%;
  object-fit: contain;

}

.image{

  display: inline-block;
    overflow: hidden;

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

span:nth-child(5) {
  animation: fade-in 3s 0.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(6) {
  animation: fade-in 3s 0.6s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(7) {
  animation: fade-in 3s 0.7s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(8) {
  animation: fade-in 3s 0.8s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(9) {
  animation: fade-in 0.8s 0.9s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(10) {
  animation: fade-in 3s 1s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(11) {
  animation: fade-in 3s 1.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(12) {
  animation: fade-in 3s 1.2s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(13) {
  animation: fade-in 3s 1.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(14) {
  animation: fade-in 3s 1.4s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(15) {
  animation: fade-in 3s 1.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(16) {
  animation: fade-in 3s 1.6s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(17) {
  animation: fade-in 3s 1.7s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(18) {
  animation: fade-in 3s 1.8s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(19) {
  animation: fade-in 3s 1.9s forwards cubic-bezier(0.11, 0, 0.5, 0);
}

span:nth-child(20) {
  animation: fade-in 3s 2.0s forwards cubic-bezier(0.11, 0, 0.5, 0);
}
span:nth-child(21) {
  animation: fade-in 3s 2.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
}
span:nth-child(22) {
  animation: fade-in 3s 2.2s forwards cubic-bezier(0.11, 0, 0.5, 0);
}
span:nth-child(23) {
  animation: fade-in 3s 2.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
}
span:nth-child(24) {
  animation: fade-in 3s 2.4s forwards cubic-bezier(0.11, 0, 0.5, 0);
}
span:nth-child(25) {
  animation: fade-in 3s 2.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
}
span:nth-child(26) {
  animation: fade-in 3s 2.6s forwards cubic-bezier(0.11, 0, 0.5, 0);
}
span:nth-child(27) {
  animation: fade-in 3s 2.7s forwards cubic-bezier(0.11, 0, 0.5, 0);
}
span:nth-child(28) {
  animation: fade-in 3s 2.8s forwards cubic-bezier(0.11, 0, 0.5, 0);
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
   
}



.slider-area {
  display: flex;
  justify-content: center;
  align-items: center;
}

.slider-area h2 {
  text-align: center;
  font-family: impact;
  font-size: 60px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin: 100px 0 30px 0;
 
}



.item {
  animation: animate 25s alternate linear infinite;
}

@keyframes animate {
  0% {
    transform: translate3d(0, 0, 0);
  }
  100% {
    transform: translate3d(-1100px, 0, 0);
  }
}

@media (max-width:767px) {
  .slider-area h2 {
    font-size: 30px;
  }
  .wrapper {
    width: 100%;
    border-radius: 0;
    padding: 0;
  }
}
body {
  margin: 0;
}
.bad {
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 300px;
  width: 100vw;
  padding: 0; /* reset padding to 0 */
  margin: 0;
  position: relative; /* Add this line */
}

.wrapper {
  display: flex;
  width: 100%;
  margin: 0 auto;
  overflow: hidden;
  height: 100%; /* set height to 100% */

  box-shadow: rgba(0, 0, 0, 0) 0px 5px 15px;
  position: absolute; /* Add this line */
}




</style>



<div class="container aboutus" style="background-color: white;">
  <div class="container" style="margin-left: 10px; margin-right: 10px;">

    <!-- First row with image on the left and paragraph on the right -->
    <div class="row zero" style="">
      <div class="col-sm-6 image">
      <img class="pb-5 mb-5 img-fluid" src="https://wereachindia.com/wp-content/uploads/2023/10/quote-image-768x866.webp" alt="" style="max-width: 100%;">
      </div>
      <div class="col-sm-6 text-start">
        <h2 class="one" style="color: black;"><b><span>WHO</span> <span>WE</span> <span>ARE</span></b></h2>
        
        <p style="font-size: x-large; color: black;">WeReach Infotech is an information technology hardware solution company established in the year 2004 in Bangalore, India. Offering high quality and cost-effective laptop & computer repair services and network solutions. We support a wide range of businesses in many industries and verticals, leverage our experience to keep everything running smoothly so your business can focus on what it does best.</p>
        
        <p style="font-size: x-large;color:black">  <div style="color: black;font-size:x-large"><div style="color:orange;display:inline-block;font-size:x-large;">WeReach Infotech</div> specializes in delivering a wide range of IT solutions to our clients. Our team embodies a diverse range of talents and technical skills that can devise a solution that best fits your business requirements.</div> </p>
      </div>
    </div>

    <!-- Second row with paragraph on the left and image on the right -->
    <div class="row">
      <div class="col-sm-6 text-start">
        <h2 style="color: black;"><b>Our Mission</b></h2>
        
        <p style="font-size: x-large;color: black;">To provide comprehensive analysis, creative strategies and reliable, pragmatic solutions to our clients. Efficient and effective IT solutions are key to the success of a business. With technology moving at a fast pace, it can sometimes be a challenge keeping up with the latest technologies and finding the most cost-effective solutions for your business needs.</p>
        <p style="font-size: x-large;color: black;">With managed IT support, we take complete care and responsibility for your overall IT infrastructure, business requirements and your day-to-day maintenance with exceptional customer service.</p>
      </div>
      <div class="col-sm-6">
        <img class="pb-5 mb-5 img-fluid zero" src="https://wereachindia.com/wp-content/uploads/2023/10/25-1.jpg" alt="" style="max-width: 100%;">
      </div>
    </div>

    <!-- Third row with image on the left and paragraph on the right -->
    <div class="row">
      <div class="col-sm-6">
        <img class="pb-5 mb-5 img-fluid zero" src="https://wereachindia.com/wp-content/uploads/2023/10/shutterstock_680153554-768x513.jpg" alt="" style="max-width: 90%;object-fit:contain;">
      </div>
      <div class="col-sm-6 text-start">
        <h2 class="one" style="color: black;"><b>Our Vision</b></h2>
        
        <p style="font-size: x-large; color: black;">To provide the high quality & most-effective laptop, desktop computer and network solutions and services.</p>
        
        <p style="font-size: x-large; color: black;">At WeReach Infotech, we are proud to provide a wide variety of small, medium and large-sized businesses with a full range of IT services particularly those organisations who wish to outsource their IT services in Bangalore.</p>
        
        <p style="font-size: x-large; color: black;">We provide the best laptop and computer rental equipment available backed by our service and qualified engineers. We offer short term to long term rentals tailored to fit your needs.</p>
      </div>
    </div>

  </div>
  
  <div class="pt-5"></div>

<div class="aone mb-5 container" style="margin-bottom: 30px;height:200px;width:100vw;">

<h1 style="color:orange;justify-content:center;">
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

<div class="pt-5"></div>
<div class="pt-5"></div>

<div class="container bad content-justify-center slider-area  w-100" style="height: 300px;width:100vw ;display:flex;justify-content:center;align-items:center;">
	
		<div class="wrapper w-100">
			<div class="item"><img alt="" src="https://wereachindia.com/wp-content/uploads/2023/09/Dell-Logo-300x250.png"></div>
			<div class="item"><img alt="" src="https://wereachindia.com/wp-content/uploads/2023/09/HP-logo-300x300.png"></div>
			<div class="item"><img alt="" src="https://wereachindia.com/wp-content/uploads/2023/09/Toshiba-Logo-300x300.png"></div>
			<div class="item"><img alt="" src="https://wereachindia.com/wp-content/uploads/2023/09/sony-removebg-preview-300x172.png"></div>
			<div class="item"><img alt="" src="https://wereachindia.com/wp-content/uploads/2023/09/lenovo-logo-300x189.png"></div>
      <div class="item"><img alt="" src="https://wereachindia.com/wp-content/uploads/2023/09/Dell-Logo-300x250.png"></div>
			<div class="item"><img alt="" src="https://wereachindia.com/wp-content/uploads/2023/09/HP-logo-300x300.png"></div>
			<div class="item"><img alt="" src="https://wereachindia.com/wp-content/uploads/2023/09/Toshiba-Logo-300x300.png"></div>
			<div class="item"><img alt="" src="https://wereachindia.com/wp-content/uploads/2023/09/sony-removebg-preview-300x172.png"></div>
			<div class="item"><img alt="" src="https://wereachindia.com/wp-content/uploads/2023/09/lenovo-logo-300x189.png"></div>

		</div>
	</div>

</div>
<?php include("footer.php"); ?>





