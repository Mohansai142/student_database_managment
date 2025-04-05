<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: url('anitspic.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 80%;
            max-width: 600px;
            margin: auto;
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        h1 {
            color: #0083e8;
            margin-top: 10px;
        }

        form {
            margin-top: 20px;
        }

        label, input, textarea {
            margin-bottom: 15px;
            color: #333; /* Changed text color for form fields */
        }

        input[type="submit"] {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 5px;
            background-color: #0083e8;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #00548c;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 100px;
            height: 100px;
            background-color: #0083e8;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .logo img {
            width: 80%;
            height: auto;
        }

        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            border-radius: 0 0 15px 15px;
            width: 100%;
        }

        @media (max-width: 600px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <div class="logo">
                <img src="logo-anits.png" alt="Logo">
            </div>
        </div>
        <h1 class="mt-4">Update Student Details</h1>

        <?php
        // Assuming you have a MySQL database connection established
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "collage"; // Change this to your actual database name

        // Create a connection
        $conn = mysqli_connect($host, $username, $password, $dbname);

        // Check the connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Get data from the form
            $id = $_POST["id"];
            $name = $_POST["name"];
            $rollNumber = $_POST["rollNumber"];
            $email = $_POST["email"];
            $phonenumber = $_POST["phonenumber"];
            $address = $_POST["address"];
            $gender = $_POST["gender"];

            // Perform validation (you can customize this part based on your requirements)
            if (empty($name) || empty($rollNumber) || empty($email) || empty($phonenumber) || empty($address) || empty($gender)) {
                echo "<p style='color: red;'>Please fill in all the fields.</p>";
            } else {
                // Update data in the database
                $stmt = $conn->prepare("UPDATE students 
                                        SET name=?, rollNumber=?, email=?, phonenumber=?, address=?, gender=? 
                                        WHERE id=?");
                $stmt->bind_param("ssssssi", $name, $rollNumber, $email, $phonenumber, $address, $gender, $id);

                if ($stmt->execute()) {
                    echo "<p style='color: green;'>Student details updated successfully.</p>";
                } else {
                    echo "<p style='color: red;'>Error updating student details: " . $stmt->error . "</p>";
                }
            }
        } else {
            // Fetch data of the student to be updated
            $id = $_GET["id"];

            $sql = "SELECT * FROM students WHERE id=$id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                ?>

                <form action="update_student.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="rollNumber">Roll Number:</label>
                        <input type="text" class="form-control" id="rollNumber" name="rollNumber" value="<?php echo $row['rollNumber']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="phonenumber">Phone Number:</label>
                        <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="<?php echo $row['phonenumber']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea class="form-control" id="address" name="address" required><?php echo $row['address']; ?></textarea>
                    </div>

                    <div class="form-group gender">
                        <label>Gender:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="male" <?php echo ($row['gender'] === 'male') ? 'checked' : ''; ?> required>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="female" <?php echo ($row['gender'] === 'female') ? 'checked' : ''; ?> required>
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="others" <?php echo ($row['gender'] === 'others') ? 'checked' : ''; ?> required>
                            <label class="form-check-label" for="others">Others</label>
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Update">
                </form>

                <?php
            } else {
                echo "<p style='color: red;'>Student not found.</p>";
            }
        }

        // Close the connection
        $conn->close();
        ?>
    </div>

    <div class="footer">
        <p>&copy; 2023 Student Database. All rights reserved by ANITS.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
