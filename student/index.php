<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Registration</title>
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

        header {
            background: linear-gradient(to right, #3494E6, #EC6EAD);
            padding: 20px;
            text-align: center;
            width: 100%;
            color: #fff;
            position: relative;
        }

        .home-button {
            position: absolute;
            top: 90px;
            right: 200px;
            margin-right: 10px;
        }

        .help-button {
            position: absolute;
            top: 90px;
            right: 300px;
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

        .gender {
            margin-bottom: 20px;
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

        input[type="radio"] {
            margin-right: 5px;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
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

        .back-button {
            position: absolute;
            bottom: -100px;
            left: 320px;
        }

        header .highlight, header .current a {
            color: #fff;
            font-weight: bold;
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
    <header>
        <a href="#" class="home-button btn btn-primary"><b>Help </b></a>
        <a href="#" class="help-button btn btn-primary"><b>Home</b></a>
        <div class="logo-container">
            <div class="logo">
                <img src="logo-anits.png" alt="Logo"><br>
                
            </div>
        </div>
    </header>

    <div class="container">
        <h1 class="mt-4">Student Registration Form</h1>
        <form action="connect.php" method="post" class="mt-6">
            <!-- Form fields here -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Name">
            </div>

            <div class="form-group">
                <label for="rollNumber">Roll Number:</label>
                <input type="text" class="form-control" id="rollNumber" name="rollNumber" required placeholder="Roll Number">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Email">
            </div>
            
            <div class="form-group">
                <label for="phonenumber">Phone Number:</label>
                <input type="text" class="form-control" id="phonenumber" name="phonenumber" required placeholder="Phone Number">
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address" required placeholder="Address"></textarea>
            </div>

            <div class="form-group gender">
                <label>Gender:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="male" required>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="female" required>
                    <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" value="others" required>
                    <label class="form-check-label" for="others">Others</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary"><b>Submit</b></button>
        </form>
    </div>

    <a href="#" onclick="history.back();" class="back-button btn btn-secondary"><b>Back</b></a>

    <div class="footer">
        <p>&copy; 2023 Student Database. All rights reserved by ANITS.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
