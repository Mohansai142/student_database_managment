<?php
// Establish a database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "collage";

$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the semmarks table if it doesn't exist
$createTableSQL = "CREATE TABLE IF NOT EXISTS semmarks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    rollnumber VARCHAR(20) NOT NULL UNIQUE,
    year1_sem1 FLOAT,
    year1_sem2 FLOAT,
    year2_sem1 FLOAT,
    year2_sem2 FLOAT,
    year3_sem1 FLOAT,
    year3_sem2 FLOAT,
    year4_sem1 FLOAT,
    year4_sem2 FLOAT
)";

mysqli_query($conn, $createTableSQL);

// Initialize messages
$successMessage = "";
$errorMessage = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollnumber = $_POST['rollnumber'];
    $year1_sem1 = $_POST['year1_sem1'];
    $year1_sem2 = $_POST['year1_sem2'];
    $year2_sem1 = $_POST['year2_sem1'];
    $year2_sem2 = $_POST['year2_sem2'];
    $year3_sem1 = $_POST['year3_sem1'];
    $year3_sem2 = $_POST['year3_sem2'];
    $year4_sem1 = $_POST['year4_sem1'];
    $year4_sem2 = $_POST['year4_sem2'];

    // Insert data into table
    $sql = "INSERT INTO semmarks 
            (rollnumber, year1_sem1, year1_sem2, year2_sem1, year2_sem2, year3_sem1, year3_sem2, year4_sem1, year4_sem2) 
            VALUES 
            ('$rollnumber', '$year1_sem1', '$year1_sem2', '$year2_sem1', '$year2_sem2', '$year3_sem1', '$year3_sem2', '$year4_sem1', '$year4_sem2')";

    if (mysqli_query($conn, $sql)) {
        $successMessage = "Semester marks have been successfully recorded!";
    } else {
        $errorMessage = "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sem Marks</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f4f8;
        }

        .container {
            width: 90%;
            max-width: 700px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        button {
            width: 100%;
            background: linear-gradient(to right, #3498db, #2ecc71);
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: linear-gradient(to right, #2980b9, #27ae60);
        }

        .message {
            text-align: center;
            font-weight: bold;
            padding: 10px;
            margin-top: 20px;
            border-radius: 6px;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            padding: 15px;
            background: #333;
            color: white;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Enter Semester Marks</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="rollnumber">Roll Number:</label>
            <input type="text" id="rollnumber" name="rollnumber" required>
        </div>

        <div class="form-group">
            <label for="year1_sem1">Year 1 - Sem 1 CGPA:</label>
            <input type="text" id="year1_sem1" name="year1_sem1" required>
        </div>

        <div class="form-group">
            <label for="year1_sem2">Year 1 - Sem 2 CGPA:</label>
            <input type="text" id="year1_sem2" name="year1_sem2" required>
        </div>

        <div class="form-group">
            <label for="year2_sem1">Year 2 - Sem 1 CGPA:</label>
            <input type="text" id="year2_sem1" name="year2_sem1" required>
        </div>

        <div class="form-group">
            <label for="year2_sem2">Year 2 - Sem 2 CGPA:</label>
            <input type="text" id="year2_sem2" name="year2_sem2" required>
        </div>

        <div class="form-group">
            <label for="year3_sem1">Year 3 - Sem 1 CGPA:</label>
            <input type="text" id="year3_sem1" name="year3_sem1" required>
        </div>

        <div class="form-group">
            <label for="year3_sem2">Year 3 - Sem 2 CGPA:</label>
            <input type="text" id="year3_sem2" name="year3_sem2" required>
        </div>

        <div class="form-group">
            <label for="year4_sem1">Year 4 - Sem 1 CGPA:</label>
            <input type="text" id="year4_sem1" name="year4_sem1" required>
        </div>

        <div class="form-group">
            <label for="year4_sem2">Year 4 - Sem 2 CGPA:</label>
            <input type="text" id="year4_sem2" name="year4_sem2" required>
        </div>

        <button type="submit">Submit</button>
    </form>

    <?php if ($successMessage): ?>
        <div class="message success"><?= $successMessage ?></div>
    <?php endif; ?>

    <?php if ($errorMessage): ?>
        <div class="message error"><?= $errorMessage ?></div>
    <?php endif; ?>
</div>

<div class="footer">
    &copy; <?= date("Y") ?> Sem Marks. All rights reserved by ANITS.
</div>

</body>
</html>
