<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "collage";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create students table if it doesn't exist
$createTableSQL = "CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    rollNumber VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    address TEXT,
    gender VARCHAR(10),
    phonenumber VARCHAR(15)
)";

if (!mysqli_query($conn, $createTableSQL)) {
    die("Table creation failed: " . mysqli_error($conn));
}

// Fetch form data
$name = $_POST['name'];
$rollNumber = $_POST['rollNumber'];
$email = $_POST['email'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$phonenumber = $_POST['phonenumber'];

$sql = "INSERT INTO students (name, rollNumber, email, address, gender, phonenumber) 
        VALUES ('$name', '$rollNumber', '$email', '$address', '$gender', '$phonenumber')";

$successMessage = "";
$errorMessage = "";

if (mysqli_query($conn, $sql)) {
    $successMessage = "Student data has been successfully registered!";
} else {
    $errorMessage = "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
            background-color: #007bff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .logo {
            max-width: 150px;
            margin-bottom: 20px;
        }

        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
            text-align: center;
        }

        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
            text-align: center;
        }

        p {
            text-align: center;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: deepskyblue;
            border-color: #007bff;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .registration-link {
            color: #fff;
            font-weight: bold;
            margin-top: 20px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="logo-anits.png" alt="Logo" class="logo">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php if ($successMessage): ?>
                    <div class="alert alert-success" role="alert">
                        <strong><?php echo $successMessage; ?></strong>
                    </div>
                <?php elseif ($errorMessage): ?>
                    <div class="alert alert-danger" role="alert">
                        <strong><?php echo $errorMessage; ?></strong>
                    </div>
                <?php endif; ?>
                <p>
                    <b>Back to </b><a href="index.php" class="registration-link"><b>Registration Form</b></a>
                </p>
                <a class="btn btn-primary" href="view_students.php"><b>View Details</b></a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
