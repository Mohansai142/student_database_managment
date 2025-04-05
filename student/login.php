<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user inputs
    $userId = isset($_POST["userId"]) ? $_POST["userId"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    // You should perform proper validation and authentication here
    // For simplicity, let's assume a basic check
    if ($userId === "admin" && $password === "admin") {
        // Redirect to the desired page after successful login
        header("Location: sai.php");
        exit();
    } else {
        // Display an error message if login fails
        $errorMessage = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Database - Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: url('anitspic.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            display: flex;
            min-height: 10vh;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            position: relative;
        }

        #login-container {
            text-align: center; /* Adjusted alignment towards left */
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 40px; /* Increased padding */
            width: 400px; /* Increased width */
            margin-bottom: 30px;
            margin-top: 30px;
            margin-left: 30px; /* Adjusted margin-left */
        }

        #login-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 16px;
            color: #3498db; /* Change color to desired value */
        }

        #login-form input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            background: linear-gradient(to left, #ecf0f1, #bdc3c7);
            color: #333;
            font-size: 16px;
            transition: background 0.3s ease;
            box-sizing: border-box;
        }

        #login-form input:focus {
            background: linear-gradient(to left, #bdc3c7, #ecf0f1);
        }

        #login-form button {
            width: calc(100% - 20px);
            padding: 12px;
            border: none;
            border-radius: 5px;
            background: #3498db;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        #login-form button:hover {
            background: #2980b9;
        }

        #login-form p {
            margin-top: 20px;
            color: red;
            font-weight: bold;
        }

        .footer {
            width: 100%;
            padding: 20px;
            background: #2c3e50;
            color: #fff;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
             position: ;
             bottom: 0;
             left: 0;
        }

        #login-container .logo-container {
            background: #3498db;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center; /* Center the text within the container */
        }

        #login-container img {
            width: 100px;
            margin: 0 auto; /* Center the image */
        }

        h1 {
            margin-bottom: 20px;
            color: blanchedalmond; /* Change color to desired value */
        }

        h2 {
            color: #3498db; /* Change color to desired value */
        }
        <style>
    .footer .help-button {
        margin-top: 10px;
        text-decoration: none;
        display: inline-block;
    }

    .footer button {
        padding: 8px 16px;
        border: none;
        border-radius: 5px;
        background: #27ae60;
        color: blanchedalmond;
        cursor: pointer;
        font-size: 14px;
        transition: background 0.5s ease;
    }

    .footer button:hover {
        background: #219d54;
    }
    </style>
</head>

<body>

    <div id="login-container">
        <div class="logo-container">
            <img src="logo-anits.png" alt="New Logo">
            <h1><b>Student Database</b></h1>
        </div>
        <h2>Login</h2>
        <form id="login-form" method="post" action="">
            <label for="userId">User Name:</label>
            <input type="text" id="userId" name="userId" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit"><b>Login</b></button>

            <?php if (isset($errorMessage)): ?>
                <p><?php echo $errorMessage; ?></p>
            <?php endif; ?>
        </form>
    </div>

    <div class="footer">
        <p>&copy; 2023 All rights reserved by ANITS.</p>
         <a href="help.php" class="help-button"><button><b>Help</b></button></a>
    </div>

</body>

</html>
