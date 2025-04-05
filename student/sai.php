<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Database</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: url('anitspicb.jpg') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            width: 50%;
            margin: auto;
            overflow: hidden;
        }

        header {
            background: #0083e8;
            color: #fff;
            padding-top: 20px;
            min-height: 70px;
            border-bottom: #bbb 1px solid;
            opacity: 0.9;
        }

        header #logo {
            width: 80px;
            height: auto;
            float: left;
        }

        header #logo img {
            width: 100%;
        }

        header #branding {
            float: left;
            padding: 10px 0 0 20px;
        }

        header #branding h1 {
            margin: 0;
            font-size: 24px;
        }

        header nav {
            float: right;
            margin-top: 30px;
            margin-right: 20px;
        }

        header .highlight, header .current a {
            color: #fff;
            font-weight: bold;
        }

        header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }

        header ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        header li {
            float: left;
            display: inline;
            padding: 0 20px 0 20px;
        }

        .columns-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }

        .column {
            flex: 1;
            text-align: center;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #f7f7f7;
            transition: transform 0.3s ease-in-out;
            margin: 20px;
        }

        .column:hover {
            transform: scale(1.05);
        }

        .column h2 a {
            color: #0083e8;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
        }

        .footer {
            margin-top: auto;
            padding: 20px 0;
            background-color: #333;
            color: #fff;
            text-align: center;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            background-color: #0083e8;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }

        .button:hover {
            background-color: #00;
        }

        /* Add Student Column */
        .add-student-column {
            background-color: #f7f7f7;
        }

        /* Update Student Column */
        .update-student-column {
            background-color: #f7f7f7;
        }

        /* View Details Column */
        .view-details-column {
            background-color: #f7f7f7;
        }

        /* Help Column */
        .help-column {
            background-color: #f7f7f7;
        }

        /* Sem Marks Column */
        .sem-marks-column {
            background-color: #f7f7f7;
            flex: 2; /* Adjust the flex value to control the size */
            width: 100%; /* Adjust the width property to control the size in percentage */
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <div id="logo">
                <img src="logo-Anits.png" alt="Logo">
            </div>
            <div id="branding">
                <h1>Student Database</h1>
            </div>
            <nav>
                <ul>
                    <li class="current"><a href="#"><b>Home</b></a></li>
                    <li><a href="About.php"><b>About</b></a></li>
                    <li><a href="help.php"><b>Help</b></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="columns-container">

            <!-- Row 1 -->
            <div class="column add-student-column" id="login">
                <h2><a href="index.php">Add Student</a></h2>
            </div>

            <div class="column update-student-column" id="update-student">
                <h2><a href="#">Contact us</a></h2>
            </div>
        </div>

        <div class="columns-container">
            <!-- Row 2 -->
            <div class="column view-details-column" id="new-user">
                <h2><a href="view_students.php">View Details</a></h2>
            </div>

            <div class="column help-column" id="help">
                <h2><a href="Attendence.php"><b>Attendance</b></a></h2>
            </div>
        </div>

        <div class="columns-container">
            <!-- Row 3 -->
            <div class="column sem-marks-column" id="sem-marks">
                <h2><a href="sem marks.php">Sem Marks</a></h2>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2023 Student Database. All rights reserved by ANITS.</p>
    </div>
</body>
</html>
