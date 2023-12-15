<?php include("header.php");?>


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

.big {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 200px;
            height: 300px;
            background-color:white;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            margin: 0 10px;
            box-shadow: ; 
            border: 1px solid black;/* Added margin for spacing */
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .aButton {
            transition: 1.0s ease all;
            -moz-transition: 1.0s ease all;
            -webkit-transition: 1.0s ease all;
            border: none;
           
            padding: 10px; /* Added padding for spacing */
            
          
            font-size: 14px;
            text-decoration: none;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            height: 35px;
            margin-top: 20px;
        }

        .card:hover .aButton {
            transform: rotateY(180deg);
        }

        .preTitle {
            color: #1f1f1f;
            font-family: "Yanone Kaffeesatz", sans-serif;
            font-size: 70px;
            font-weight: normal;
            letter-spacing: 0;
            line-height: 35px;
            text-align: center;
            margin: 20px 0;
        }


        .message {
            font-family: Arial, sans-serif;
        
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
          
        }

        .contact-form {
           
      
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #0090d3;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #007bb5;
        }
    </style>

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
        <h1 class="display-3 text-black text-center mb-4"> <span>Contact us</span></h1>
        <!-- <h1 class="display-3 text-white mb-4"> <span>Repair</span> <span>Service</span> </h1> -->
        
    </div>
</div>
    <div class="pt-5"></div>
<div class="pt-5"></div>


<div class="contact">
    <div class="name" style="display: flex; justify-content: center;">
        <!-- Content here -->
    </div>
</div>
<div class="contact">
    <div class="name" style="display: flex; justify-content: center;">
        <!-- Content here -->
    </div>
</div>

<div class="container-fluid mb-5">
    <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-content">
                    <div class="aButton">
                        <img src="https://wereachindia.com/demo/wp-content/uploads/2023/09/contact_info01.png" alt="">
                    </div>
                    <br>
                    <br>
                    <br>
                    <p>Tel: 080 - 2852 1102</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-content">
                    <div class="aButton">
                        <img src="https://wereachindia.com/demo/wp-content/uploads/2023/09/contact_info02.png" alt="">
                    </div>
                    <br>
                    <br>
                    <br>
                    <p>Email:</p>
                    <p>info@wereachindia.com</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-content">
                    <div class="aButton">
                        <img src="https://wereachindia.com/demo/wp-content/uploads/2023/09/contact_info03.png" alt="">
                    </div>
                    <br>
                    <br>
                    <br>
                    <p>WeReach Infotech #69, 2nd</p>
                    <p>main road, Tech City Layout,</p>
                    <p>Bangalore - 560100</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row container-fluid">
        <div class="col-md-6">
            <div class="contact-form">
                <h2 style="font-size: 2em; text-align: left;">Send a Message</h2>
                <input type="text" placeholder="Your Name">
                <input type="tel" placeholder="Your Phone Number">
                <button>Book a Service</button>
            </div>
        </div>

        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.2497233396757!2d73.83103767401347!3d19.955997523760328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeacf3f1b1f1b%3A0xc4b91ceddc9dc924!2sNishi%20Graphics!5e0!3m2!1sen!2sin!4v1702374658479!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>



<?php include("footer.php");?>