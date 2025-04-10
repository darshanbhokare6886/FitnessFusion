<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facility Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-gXw1Wt46k/7jgkFsLr2lVfwG2tbyjfuO3p+9FmrBQo1hIy2PqkDm/I8dxOqs9RCrFzQj2dMZ36qgDH19J5zE9Q=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-color: #000;
            /* Black background */
            color: #fff;
            /* White text */
        }

        /* Navbar background */
        .navbar {
            background-color: #000;
            /* Black background for the navbar */
        }

        /* Active page color */
        .navbar-nav .nav-item.active .nav-link {
            color: #ff4500 !important;
            /* Orange-red color for the active page */
        }

        /* Hover color for the navigation items */
        .navbar-nav .nav-link:hover {
            color: #ff4500 !important;
            /* Add !important for higher specificity */
        }

        /* Align items in navbar */
        .navbar-nav {
            display: flex;
            align-items: center;
        }

        .navbar-nav .nav-item {
            margin-right: 10px;
            /* Adjust spacing between items */
        }

        .navbar .container {
            padding-left: 0;
            padding-right: 0;
        }

        /* Override common layout styles */
        body {
            background-color: black;
        }

        /* Facility Page Content */
        .facility-container {
            margin-top: 50px;
        }

        .form-container {
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .form-container label {
            color: #fff;
        }

        .form-container input[type="text"],
        .form-container textarea {
            background-color: #555;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            margin-bottom: 10px;
        }

        .form-container input[type="file"] {
            background-color: #555;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            margin-bottom: 10px;
        }

        .form-container .btn {
            margin-top: 10px;
        }

        #workout-title {
            color: transparent;
            -webkit-text-stroke: 1px rgba(255, 255, 255, 0.35);
            font-size: 7em;
            font-weight: 900;
            font-family: "Poppins", sans-serif;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 0%;
            position: relative;
            /* Added */
        }

        #desc {
            position: absolute;
            /* Added */
            bottom: -30px;
            /* Added */
            left: 50%;
            /* Added */
            transform: translateX(-50%);
            /* Added */
            font-size: 2.4rem;
            text-align: center;
            color: white;
            font-weight: 800;
            margin-bottom: 50px;
            font-family: "Montserrat", sans-serif;
            text-transform: uppercase;
        }
        ::selection {
      background-color: #ff4500;
      /* Orange background */
      color: #fff;
      /* White text */
    }

    ::-moz-selection {
      background-color: #ff4500;
      /* Orange background for Firefox */
      color: #fff;
      /* White text for Firefox */
    }
    </style>
</head>

<body class="font-sans">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container mx-auto">
            <img src="logo.png" alt="Fitness Fusion Logo" class="h-12 w-auto mr-2" />
            <a class="navbar-brand font-bold" href="#" style="font-size: 24px">Fitness Fusion</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="admin-home.php" style="font-size: 18px">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-workout.php" style="font-size: 18px">Workout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-workout-info.php" style="font-size: 18px">Workout Deatails</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-membership.php" style="font-size: 18px">Membership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-program.php" style="font-size: 18px">Programs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-amenities.php" style="font-size: 18px">Amenities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-gallery.php" style="font-size: 18px">Gallery</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="admin-contactus-data.php" style="font-size: 18px">Contact Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-payment-data.php" style="font-size: 18px">Payment Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-offer.php" style="font-size: 18px">Offer</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr style="border-color: white" />




    <!-- Container -->

    <div class="row justify-content-center">
        <!-- Center the content horizontally -->
        <div class="col-md-8">
            <!-- Use Bootstrap column classes for responsiveness -->
            <div id="workout-info" class="text-center">
                <!-- Center the content vertically -->
                <p id="workout-title">ADMINS PAGE</p>
                <p id="desc">Contact section</p>
            </div>
        </div>
    </div>

    <!-- Form Container -->
    <?php
    // Database connection parameters
    $servername = "localhost"; // Change this to your database server name
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $database = "cpdb"; // Change this to your database name
    
    // Create connection
    $your_db_connection = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$your_db_connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch data from the database table
    $sql = "SELECT * FROM contactus";
    $result = mysqli_query($your_db_connection, $sql);

    // Check if there are any rows returned
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            // Output the HTML structure with dynamic data
            echo '<div style="margin:50px" class="card bg-dark text-white">';
            echo '<h5 style="color:orangered" class="card-header bg-dark">' . htmlspecialchars($row["name"]) . '</h5>';
            echo '<div class="card-body">';
            echo '<h5 class="card-title text-white">' . htmlspecialchars($row["email"]) . '</h5>';
            echo '<p class="card-text">' . htmlspecialchars($row["message"]) . '</p>';
            echo '</div></div>';
        }
    } else {
        echo "0 results";
    }

    // Close the database connection
    mysqli_close($your_db_connection);
    ?>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>