<!DOCTYPE html>
<html lang="en">
<head>
    <title>Error</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('anitspic.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            border-radius: 10px;
        }

        h1 {
            color: #f00;
        }
        h2{
            color: #f00;
        }

        p {
            color: #333;
        }

        .logo-container {
            background-color: #f00; /* Change the background color to red */
            padding: 10px;
            border-radius: 10px;
        }

        .logo {
            max-width: 100px;
            margin-bottom: 20px;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button {
            margin-right: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container bg-light p-4 rounded">
        <div class="logo-container">
            <img src="logo-anits.png" alt="Logo" class="logo img-fluid mb-4">
        </div>
        <h1 class="text-danger">Error</h1>
        <h2><b>Failed to record the attendance</b></h2>
        <?php
        session_start();
        if (isset($_SESSION['message'])) {
            echo "<p>{$_SESSION['message']}</p>";
            unset($_SESSION['message']);
        }
        ?>

        <div class="button-container">
            <a href="Attendence.php" class="btn btn-secondary button"><b>Back to Form</b></a>
        </div>
    </div>

    <!-- Footer section -->
    <footer class="bg-dark text-white text-center p-2">
        <p> 2023 Student Database. All rights reserved by ANITS.</p>
    </footer>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
