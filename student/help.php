<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help - Student Database</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to left, #bdc3c7, #e0e0e0);
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
            transition: background 0.5s ease;
            scroll-behavior: smooth;
        }

        header {
            background: linear-gradient(to right, #0083e8, #3498db);
            color: #fff;
            padding-top: 40px;
            min-height: 70px;
            border-bottom: #bbb 1px solid;
            opacity: 0.8;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header #branding {
            display: flex;
            align-items: center;
            padding: 10px 0 0 20px;
        }

        header #branding h1 {
            margin: 0;
            margin-left: 10px;
        }

        header #branding img {
            height: 100px;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        h2 {
            margin-top: 20px;
        }

        p {
            line-height: 1.6;
        }

        .footer {
            margin-top: auto;
            padding: 20px 0;
            background: linear-gradient(to right, #333, #555);
            color: #fff;
            text-align: center;
        }

        /* New styles for the contact support section */
        #contact-support {
            margin-top: 30px;
        }

        #contact-support h3 {
            color: #0083e8;
            margin-bottom: 10px;
        }

        #contact-support p {
            margin-bottom: 20px;
        }

        #contact-support a {
            color: #0083e8;
            text-decoration: underline;
        }

        /* Styles for the back button */
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background: linear-gradient(to right, #0083e8, #006bb7);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .back-button:hover {
            background: linear-gradient(to right, #006bb7, #004a8f);
        }
    </style>
</head>

<body>

    <header>
        <div class="container">
            <div id="branding">
                <img src="logo-Anits.png" alt="Logo">
                <h1>Student Database</h1>
            </div>
        </div>
    </header>

    <div class="container">
        <h2>Help - Student Database</h2>
        <h3>Logging In</h3>
        <p>To log in, go to the <a href="login.php">Login Page</a> and enter your username and password. If you are an administrator, use the provided admin credentials.</p>

        <h3>Browsing the Website</h3>
        <p>Navigate through the website using the provided links. You can view student details, register new students, access attendance, and more.</p>

        <h3>Adding Attendance</h3>
        <p>To add attendance, follow these steps:</p>
        <ol>
            <li>Go to the <a href="Attendence.php">Attendance Form</a>.</li>
            <li>Enter the required details, including Student ID, and details for each month.</li>
            <li>Click the "Submit" button to save the attendance information.</li>
            <li>If you entered wrong data in the month fields the Attendance can not be recorded.</li>
        </ol>

        <h3>Adding Semester Marks</h3>
        <p>To add semester marks, follow these steps:</p>
        <ol>
            <li>Go to the <a href="sem marks.php">Semester Marks Page</a>.</li>
            <li>Choose the student for whom you want to add marks.</li>
            <li>Enter the marks for each subject or semester.</li>
            <li>Click the "Submit" button to save the marks information.</li>
        </ol>

        <!-- Contact Support Section -->
        <div id="contact-support">
            <h3>Contact Support</h3>
            <p>If you are facing any issues or need assistance, please contact our support team.</p>
            <p>Email: <a href="mailto:support@example.com">anilnerukondacsdteam7@gmail.com</a></p>
        </div>
        <!-- Back button to go back to the previous page -->
        <a href="javascript:history.go(-1)" class="back-button"><b>Back</b></a>
    </div>

    <div class="footer">
        <p>&copy; 2023 Student Database. All rights reserved by ANITS.</p>
    </div>

</body>

</html>
