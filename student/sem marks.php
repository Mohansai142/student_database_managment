<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sem Marks</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        header {
            background: linear-gradient(to right, #3494E6, #EC6EAD);
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

        .content {
            padding: 20px;
            flex: 1;
            background: linear-gradient(to left, #fff, #d9faff);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .footer {
            padding: 20px 0;
            background-color: #333;
            color: #fff;
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
        }

        button {
            padding: 10px;
            background: linear-gradient(to right, #3494E6, #EC6EAD);
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            transition: background 0.3s ease;
            width: 100%;
        }

        button:hover {
            background: linear-gradient(to right, #4CA1AF, #C4E0E5);
        }
        .btn-secondary {
            /* Dark gray background for the back button */
            font-weight: bold;
            position:absolute ; /* Positioning the button */
            bottom: -330px; /* Adjust the distance from the top */
            left: 200px;
            width: 100px; /* Reduce the width of the button */
            padding: 8px; /* Adjust the padding */
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
                <h1>Sem Marks</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="sai.php"><b>Home</b></a></li>
                    <li><a href="help.php"><b>Help</b></a></li>
                    <li><a href="view_semmarks.php"><b>view Details</b></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="content">
            <h2>Semester Marks</h2>
            <form action="process_marks.php" method="post">
  <div class="form-group">
    <label for="rollnumber">Roll Number:</label>
    <input type="text" id="rollnumber" name="rollnumber" required>
</div>
                <div class="form-group">
                    <label for="year1_sem1">Year 1 - Sem 1 CGPA:</label>
                    <input type="text" id="year1_sem1" name="year1_sem1">
                </div>

                <div class="form-group">
                    <label for="year1_sem2">Year 1 - Sem 2 CGPA:</label>
                    <input type="text" id="year1_sem2" name="year1_sem2" >
                </div>

                <div class="form-group">
                    <label for="year2_sem1">Year 2 - Sem 1 CGPA:</label>
                    <input type="text" id="year2_sem1" name="year2_sem1" >
                </div>

                <div class="form-group">
                    <label for="year2_sem2">Year 2 - Sem 2 CGPA:</label>
                    <input type="text" id="year2_sem2" name="year2_sem2" >
                </div>

                <div class="form-group">
                    <label for="year3_sem1">Year 3 - Sem 1 CGPA:</label>
                    <input type="text" id="year3_sem1" name="year3_sem1" >
                </div>

                <div class="form-group">
                    <label for="year3_sem2">Year 3 - Sem 2 CGPA:</label>
                    <input type="text" id="year3_sem2" name="year3_sem2" >
                </div>

                <div class="form-group">
                    <label for="year4_sem1">Year 4 - Sem 1 CGPA:</label>
                    <input type="text" id="year4_sem1" name="year4_sem1" >
                </div>

                <div class="form-group">
                    <label for="year4_sem2">Year 4 - Sem 2 CGPA:</label>
                    <input type="text" id="year4_sem2" name="year4_sem2" >
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <button onclick="goBack()" class="btn btn-secondary">Back</button>


    <div class="footer">
        <p>&copy; 2023 Sem Marks. All rights reserved by ANITS</p>
    </div>
    <script>
        // JavaScript function to go back to the previous page
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
