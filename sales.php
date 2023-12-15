<?php include("header.php") ?>
<div class="jumbotron jumbotron-fluid text-center text-light" style="height: 90vh; background-image: url('https://img.freepik.com/free-photo/programming-background-with-person-working-with-codes-computer_23-2150010144.jpg?size=626&ext=jpg&ga=GA1.1.246565403.1702462119&semt=sph'); background-size: cover;-webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(80%);">
    <div class="container-fluid h-100 d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-3 text-black text-center mb-4 text-white"> <span>SALES</span></h1>
        <!-- <h1 class="display-3 text-white mb-4"> <span>Repair</span> <span>Service</span> </h1> -->
        
    </div>
</div>


<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
         /* .two {
            /* margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        } */
/* 
        .parallax {
            perspective: 1px;
            overflow-x: hidden;
            overflow-y: auto;
            position: relative;
            width: 50vw;
            height: 300px;
            transition: background-color 0.3s ease;
        } */

        .parallax:hover {
            background-color: yellow; /* Change to your desired hover color */
        } 
       

        /* .parallax-item {
            position: absolute;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
        } */

        /* .parallax-item img {
            width: 100%;
            height: auto;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
            transform: translateZ(var(--layer));
        } */

 

/* .container {
    width: 80%;
    text-align: center;
    margin: 0 auto;
} */

/* .parallax-item img {
    width: auto;
    height: auto;
} */


@media (max-width: 667px) {
    /* Apply styles for devices with a width less than or equal to 768px (Bootstrap's 'sm' breakpoint) */
    .parallax {
        margin: 5px; /* Apply margin -5 for smaller screens */
    }
} */


        

</style>
<style>
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

</style>


</head>



<div class="pt-5"></div>
<div class="pt-5"></div>
    <div class="justify-content-center">
        <div class="container two">
            <!-- Row 1 -->
            <div class="row">
                <div class="col-md-6">
                    <div class="parallax border border-dark rounded text-center mx-auto my-4" style="max-width: 300px; padding: 20px;">
                        <div class="parallax-item" style="--layer: -1;">
                            <img class="img-fluid" src="https://img.freepik.com/free-photo/computerchip-technology-electronics-industry_93675-128223.jpg?size=626&ext=jpg&ga=GA1.1.246565403.1702462119&semt=ais" alt="Image 1" style="max-width: 100%; height: auto;">
                        </div>
                        <div class="name">RAM</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="parallax border border-dark rounded text-center mx-auto my-4" style="max-width: 300px; padding: 20px;">
                        <div class="parallax-item" style="--layer: -1;">
                            <img class="img-fluid" src="https://wereachindia.com/demo/wp-content/uploads/2023/09/istockphoto-173421916-612x612-1.jpeg" alt="Image 2" style="max-width: 100%; height: auto;">
                        </div>
                        <div class="name">HARD DISK</div>
                    </div>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="row">
                <div class="col-md-6">
                    <div class="parallax border border-dark rounded text-center mx-auto my-4" style="max-width: 300px; padding: 20px;">
                        <div class="parallax-item" style="--layer: -1;">
                            <img class="img-fluid" src="https://wereachindia.com/demo/wp-content/uploads/2023/09/istockphoto-153065264-612x612-1.jpeg" alt="Image 3" style="max-width: 100%; height: auto;">
                        </div>
                        <div class="name">KEYBOARD</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="parallax border border-dark rounded text-center mx-auto my-4" style="max-width: 300px; padding: 20px;">
                        <div class="parallax-item" style="--layer: -1;">
                            <img class="img-fluid" src="https://wereachindia.com/demo/wp-content/uploads/2023/09/istockphoto-171574641-612x612-1.jpeg" alt="Image 4" style="max-width: 100%; height: auto;">
                        </div>
                        <div class="name">PRINTER</div>
                    </div>
                </div>
            </div>
            <div class="row">
        <div class="col-md-6">
            <div class="parallax border border-dark rounded text-center mx-auto my-4" style="max-width: 300px; padding: 20px;">
                <div class="parallax-item" style="--layer: -1;">
                    <img class="img-fluid" src="https://wereachindia.com/demo/wp-content/uploads/2023/09/360_F_267083342_Dw7NvtP2oy0JfO2qTjDlWePOaxoCJgxM.jpeg" alt="Image 1" style="max-width: 100%; height: auto;">
                </div>
                <div class="name">SERVER</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="parallax border border-dark rounded text-center mx-auto my-4" style="max-width: 300px; padding: 20px;">
                <div class="parallax-item" style="--layer: -1;">
                    <img class="img-fluid" src="https://wereachindia.com/demo/wp-content/uploads/2023/09/istockphoto-98013994-612x612-1.jpeg" alt="Image 1" style="max-width: 100%; height: auto;">
                </div>
                <div class="name">COMPUTER</div>
            </div>
        </div>
    </div>
            </div>

<div class="pt-5"></div>
    

<?php include("footer.php") ?>