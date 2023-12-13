<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Popper.js -->


    <!-- Bootstrap JS -->


    <!-- Waypoints JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

    <!-- Counter-Up JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <style>
        body {
            margin: 0;
        }

        div.container {
            font-family: 'Raleway', sans-serif;
            margin: 0 auto;
            padding: 10em 3em;
            text-align: center;
        }

        div.container a {
            color: #FFF;
            text-decoration: none;
            font: 20px 'Raleway', sans-serif;
            margin: 0px 10px;
            padding: 10px 10px;
            position: relative;
            z-index: 0;
            cursor: pointer;
        }

        .green {
            background: #4caf50;
        }

        .borderXwidth a:before,
        .borderXwidth a:after {
            position: absolute;
            opacity: 0;
            width: 0%;
            height: 2px;
            content: '';
            background: #FFF;
            transition: all 0.3s;
        }

        .borderXwidth a:before {
            left: 0px;
            top: 0px;
        }

        .borderXwidth a:after {
            right: 0px;
            bottom: 0px;
        }

        .borderXwidth a:hover:before,
        .borderXwidth a:hover:after {
            opacity: 1;
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- Your existing HTML content -->
</body>

</html>
