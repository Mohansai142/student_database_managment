<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Your styling for the about page */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
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
            background:#0083e8; 
            color: #fff;
            padding-top: 40px;
            min-height: 70px;
            border-bottom: #bbb 1px solid;
            opacity: 0.8;
        }

        header #branding {
            display: flex;
            align-items: center;
            padding: 10px 0 0 20px;
        }

        header #branding h1 {
            margin: 0;
            margin-left: 10px;
        }

        header #branding img {
            height: 100px;
        }

        .content {
            padding: 20px;
        }

        /* Add your other styles as needed */
    </style>
</head>
<body>

    <header>
        <div class="container">
            <div id="branding">
                <img src="logo-Anits.png" alt="Logo">
                <h1>About Us</h1>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="content">
            <h2>Welcome to Our Student Database Project</h2>
            <p>
                We are a team of passionate individuals who believe in the power of education
                and the impact it can have on students' lives. Our project, developed based on
                design thinking principles and project innovations, aims to revolutionize the
                way student information is managed and utilized.
            </p>

            <h3>Project Innovations:</h3>
            <p>
                Our project is guided by the principles of design thinking, focusing on user
                needs, collaboration, and continuous improvement.<b> Dr. Rajesh Gosh sir</b>, our esteemed
                instructor, has provided valuable insights and mentorship throughout the development
                process, ensuring the project aligns with educational goals and best practices.
            </p>

            <h3>Team Leader:</h3>
            <p>
                <b>Mohan Sai</b>, our dedicated team leader, has played a pivotal role in coordinating
                efforts, fostering creativity, and ensuring the successful execution of the project.
                His leadership has been instrumental in driving innovation and achieving project milestones.
            </p>

            <h3>Team Members:</h3>
            <!-- Team members using Bootstrap list group -->
            <ul class="list-group"><b>
                <li class="list-group-item">Navya</li>
                <li class="list-group-item">Susmitha</li>
                <li class="list-group-item">Aparna</li>
                <li class="list-group-item">Kalyan</li>
                <li class="list-group-item">Shankar</li>
            </b>
            </ul>
            <button onclick="goBack()" class="btn btn-secondary">Back</button>

            <!-- Add more content as needed -->

        </div>
    </div>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // JavaScript function to go back to the previous page
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
