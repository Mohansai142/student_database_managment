<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Semester Marks</title>
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

        .btn-secondary {
            background-color: skyblue;
            border-color: #6c757d;
            font-weight: bold;
            position: absolute;
            bottom: 110px;
            left: 80px;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .btn-secondary:hover {
            background-color: #545b62;
            border-color: #545b62;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
            text-align: left;
        }

        th, td {
            padding: 15px;
        }

        th {
            background-color: #3494E6;
            color: #fff;
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
                <li><a href="About.php"><b>About</b></a></li>
                <li><a href="contact.php"><b>Contact</b></a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="container">
    <div class="content">
        <h2>View Semester Marks</h2>
        <?php
        // Database configuration
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "collage";

        // Create connection
        $conn = mysqli_connect($host, $username, $password, $database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Query to fetch semester marks
        $sql = "SELECT * FROM semmarks";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                echo "<table>";
                echo "<tr>
                        <th>Roll Number</th>
                        <th>Year 1 - Sem 1 CGPA</th>
                        <th>Year 1 - Sem 2 CGPA</th>
                        <th>Year 2 - Sem 1 CGPA</th>
                        <th>Year 2 - Sem 2 CGPA</th>
                        <th>Year 3 - Sem 1 CGPA</th>
                        <th>Year 3 - Sem 2 CGPA</th>
                        <th>Year 4 - Sem 1 CGPA</th>
                        <th>Year 4 - Sem 2 CGPA</th>
                      </tr>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['rollnumber']}</td>
                            <td>{$row['year1_sem1']}</td>
                            <td>{$row['year1_sem2']}</td>
                            <td>{$row['year2_sem1']}</td>
                            <td>{$row['year2_sem2']}</td>
                            <td>{$row['year3_sem1']}</td>
                            <td>{$row['year3_sem2']}</td>
                            <td>{$row['year4_sem1']}</td>
                            <td>{$row['year4_sem2']}</td>
                          </tr>";
                }

                echo "</table>";
            } else {
                echo "No records found.";
            }
        } else {
            echo "Error executing query: " . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </div>
</div>

<button onclick="goBack()" class="btn btn-secondary">Back</button>

<div class="footer">
    <p>&copy; 2023 Sem Marks. All rights reserved by ANITS</p>
</div>

<script>
    function goBack() {
        window.history.back();
    }
</script>

</body>
</html>
