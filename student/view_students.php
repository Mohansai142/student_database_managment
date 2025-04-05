<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "collage";

$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create students table if it does not exist
$createTable = "CREATE TABLE IF NOT EXISTS students (
    rollNumber VARCHAR(20) PRIMARY KEY,
    name VARCHAR(100),
    gender VARCHAR(10),
    email VARCHAR(100),
    phonenumber VARCHAR(20),
    address TEXT
)";
mysqli_query($conn, $createTable);

// Retrieve data
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

// Check for SQL errors
if (!$result) {
    die("Error retrieving student data: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Student Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background: deepskyblue;
            color: #fff;
            padding: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header #branding {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        header #branding img {
            height: 60px;
            margin-right: 15px;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 30px auto;
            flex-grow: 1;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #343a40;
            color: #fff;
        }

        .footer {
            margin-top: auto;
            padding: 15px;
            background-color: #343a40;
            color: #fff;
            text-align: center;
        }

        .btn-back {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <div id="branding">
            <img src="logo-Anits.png" alt="ANITS Logo">
            <h1>Student Database</h1>
        </div>
    </div>
</header>

<div class="container">
    <h2>Student Details</h2>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Roll Number</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['rollNumber']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['gender']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['phonenumber']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['address']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center'>No student records found.</td></tr>";
                }

                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
    <a href="javascript:history.back()" class="btn btn-secondary btn-back"><b>Back</b></a>
</div>

<div class="footer">
    <p>&copy; <?php echo date("Y"); ?> Student Database. All rights reserved by ANITS</p>
</div>

</body>
</html>
