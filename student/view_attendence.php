<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Attendance Details</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
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
            width: 80px;
            height: auto;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            overflow: hidden;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            padding: 20px 0;
            color: #3494E6;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #3494E6;
            color: #fff;
        }

        td {
            background-color: lightskyblue;
            color: #333; /* Updated text color */
        }


        footer {
            background: linear-gradient(to left, black, #3494E6); /* Updated footer color */
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3494E6;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #207bb5;
        }
    </style>
</head>
<body>
    <header>
        <img src="logo-anits.png" alt="Logo">
    </header>

    <div class="container">
        <h1>Attendance Details</h1>

        <?php
        // Assuming you have a MySQL database connection established
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "collage";

        // Create a connection
        $conn = mysqli_connect($host, $username, $password, $dbname);

        // Check the connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch data from the database
        $sql = "SELECT * FROM details";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>Student ID</th>
                        <th>Month 1</th>
                        <th>Month 2</th>
                        <th>Month 3</th>
                        <th>Month 4</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['student_id']}</td>
                        <td>{$row['month_1']}</td>
                        <td>{$row['month_2']}</td>
                        <td>{$row['month_3']}</td>
                        <td>{$row['month_4']}</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "No attendance records found.";
        }

        // Close the connection
        $conn->close();

        ?>
         <a href="Attendence.php" class="back-button">Back</a>
    </div>

    <footer>
        &copy; 2023 Student Database. All rights reserved ANITS
    </footer>
</body>
</html>
