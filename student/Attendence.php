<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background: linear-gradient(to right, #3494E6, #EC6EAD);
            color: #fff;
            padding: 20px 0;
            text-align: center;
            width: 100%;
        }

        header img {
            max-width: 80px;
            height: auto;
        }

        .container {
            width: 35%;
            margin: 30px auto;
            overflow: hidden;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            padding-bottom: 60px;
        }

        h1 {
            text-align: center;
            padding: 10px 0;
            color: #3494E6;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }

        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        footer {
            background: linear-gradient(to left, black, #3494E6);
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .help-button {
            background-color: #007bff;
            color: #fff;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            display: inline-block;
        }

        @media (max-width: 600px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <header>
        <img src="logo-Anits.png" alt="Logo"><br>
        <a href="sai.php" class="help-button"><b>Home</b></a>
        <a href="view_attendence.php" class="help-button"><b>View details</b></a>
    </header>

    <div class="container">
        <h1>Attendance Form</h1>

        <form action="" method="post">
            <label for="student_id"><b>Student ID:</b></label>
            <input type="text" id="student_id" name="student_id" required>

            <label for="month_1"><b>Month 1:</b></label>
            <input type="text" id="month_1" name="month_1" required>

            <label for="month_2"><b>Month 2:</b></label>
            <input type="text" id="month_2" name="month_2" required>

            <label for="month_3"><b>Month 3:</b></label>
            <input type="text" id="month_3" name="month_3" required>

            <label for="month_4"><b>Month 4:</b></label>
            <input type="text" id="month_4" name="month_4" required>

            <input type="submit" value="Submit">
        </form>
    </div>

    <?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "collage";

        // Create a connection to MySQL server
        $conn = new mysqli($host, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Create database if not exists
        $conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
        $conn->select_db($dbname);

        // Create table if not exists
        $createTable = "CREATE TABLE IF NOT EXISTS details (
            id INT AUTO_INCREMENT PRIMARY KEY,
            student_id VARCHAR(20) NOT NULL,
            month_1 INT NOT NULL,
            month_2 INT NOT NULL,
            month_3 INT NOT NULL,
            month_4 INT NOT NULL,
            submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
        $conn->query($createTable);

        // Get values from form
        $student_id = $_POST["student_id"];
        $month_1 = $_POST["month_1"];
        $month_2 = $_POST["month_2"];
        $month_3 = $_POST["month_3"];
        $month_4 = $_POST["month_4"];

        // Validate input
        if (empty($student_id) || !is_numeric($month_1) || !is_numeric($month_2) || !is_numeric($month_3) || !is_numeric($month_4)) {
            $_SESSION['error_message'] = "Invalid data. Please check your input.";
            header("Location: Error.php");
            exit();
        }

        // Insert into table
        $sql = "INSERT INTO details (student_id, month_1, month_2, month_3, month_4)
                VALUES ('$student_id', '$month_1', '$month_2', '$month_3', '$month_4')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['success_message'] = "Data saved successfully!";
            header("Location: success_page.php");
            exit();
        } else {
            $_SESSION['error_message'] = "Error: " . $conn->error;
            header("Location: Error.php");
            exit();
        }

        $conn->close();
    }
    ?>

    <footer>
        &copy; 2023 Student Database. All rights reserved by ANITS.
        <br>
        <a href="help.php" class="help-button"><b>Help</b></a>
    </footer>
</body>

</html>
