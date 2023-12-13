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
<div class="jumbotron jumbotron-fluid text-center w-100 justify-content-center" style="background:#333; height:60vh;">
        <div class="container-fluid w-100 " style="height:50vh;">
            <div class="intro container-fluid justify-content h-100 pb-2 pt-1 px-1">
                <img src="" alt="" style="overflow: hidden; width:100%;object-fit: cover;height:100%;">
              
                <!-- Add more content as needed -->
            </div>
        </div>
    </

    </div>

<div class="contact">

<div class="name" style="display:flex;justify-content:center;">

<div style="color:orange;justify-content:center;">
        <span style="font-size:70px;">WeReach Infotech</span>
        <br>
        <span style="color: black;justify-content:left;font-size:100px;">Contact Address</span>
    </div>

</div>

</div>

<div class="container-fluid mb-5 ">
    <div class="row justify-content-center">

        <div class=" col-lg-4 mb-3">
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

        <div class=" col-lg-4 mb-3">
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

        <div class=" col-lg-4 mb-3">
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

    <div class="row container fluid">
    <div class="col-md-6 message ">
<div class="contact-form">
    <h2>Send a Message</h2>
    <input type="text" placeholder="Your Name">
    <input type="tel" placeholder="Your Phone Number">
    <button>Book a Service</button>
</div>
</div>
<div class="col-md-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.2497233396757!2d73.83103767401347!3d19.955997523760328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeacf3f1b1f1b%3A0xc4b91ceddc9dc924!2sNishi%20Graphics!5e0!3m2!1sen!2sin!4v1702374658479!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
    </div>
    
</div>





<?php include("footer.php");?>