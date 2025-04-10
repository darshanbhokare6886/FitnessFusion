<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <li class="nav-item active">
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
                    <li class="nav-item">
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

    <?php
    // Database connection parameters
    $servername = "localhost"; // Change this if your MySQL server is on a different host
    $username = "root"; // Change this to your MySQL username
    $password = ""; // Change this to your MySQL password
    $database = "cpdb"; // Change this to the name of your MySQL database
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['add'])) { // Add button clicked
            // Process form data
            $title = $_POST['title'];
            $description = $_POST['description'];
            $keyfeatures = $_POST['keyfeatures'];
            $amount = $_POST['amount'];

            // Upload image
            $targetDirectory = "uploads/"; // Directory where images will be uploaded
            $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
            move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
            $imagePath = $targetFile;


            // SQL query to update data in the 'workout' table
            $sql = "INSERT INTO `cpdb`.`membership` (`title`, `description`, `keyfeatures`, `amount`, `image`) VALUES ('$title', '$description', '$keyfeatures', '$amount', '$imagePath');";

            // Execute the SQL query
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your entry has been updated successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Sorry!</strong> Your entry has not been updated successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }
        } elseif (isset($_POST['update'])) { // Update button clicked
            // Process form data for update
            $title = $_POST['title'];
            $description = $_POST['description'];
            $keyfeatures = $_POST['keyfeatures'];
            $amount = $_POST['amount'];


            // Fetch the previous description from the database if no new description is provided
            if (empty($description)) {
                $sql_fetch_description = "SELECT description FROM membership WHERE title='$title'";
                $result_fetch_description = mysqli_query($conn, $sql_fetch_description);
                $row_fetch_description = mysqli_fetch_assoc($result_fetch_description);
                $description = $row_fetch_description['description'];
            }

            // Fetch the previous image path
            if (empty($keyfeatures)) {
                $sql_fetch_keyfeatures = "SELECT keyfeatures FROM membership WHERE title='$title'";
                $result_fetch_keyfeatures = mysqli_query($conn, $sql_fetch_keyfeatures);
                $row_fetch_keyfeatures = mysqli_fetch_assoc($result_fetch_keyfeatures);
                $keyfeatures = $row_fetch_keyfeatures['keyfeatures'];
            }

            // Fetch the previous amount 
            if (empty($amount)) {
                $sql_fetch_amount = "SELECT amount FROM membership WHERE title='$title'";
                $result_fetch_amount = mysqli_query($conn, $sql_fetch_amount);
                $row_fetch_amount = mysqli_fetch_assoc($result_fetch_amount);
                $amount = $row_fetch_amount['amount'];
            }

            // Fetch the previous image path
            if (empty($imagePath)) {
                $sql_fetch_image = "SELECT image FROM membership WHERE title='$title'";
                $result_fetch_image = mysqli_query($conn, $sql_fetch_image);
                $row_fetch_image = mysqli_fetch_assoc($result_fetch_image);
                $prev_image = $row_fetch_image['image'];
            }
            // Check if a new image file is uploaded
            if ($_FILES["image"]["name"] != '') {
                // Upload new image
                $targetDirectory = "uploads/"; // Directory where images will be uploaded
                $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
                move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
                $imagePath = $targetFile;
            } else {
                // No new image uploaded, retain the previous image path
                $imagePath = $prev_image;
            }

            // SQL query to update data in the 'workout' table
            $sql = "UPDATE membership SET description='$description', keyfeatures='$keyfeatures', amount='$amount', image='$imagePath' WHERE title='$title'";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong>Your entry has been updated successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Sorry!</strong>Your entry has not updated successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
        } elseif (isset($_POST['delete'])) { // Delete button clicked
            // Process form data for deletion
    
            // SQL query to delete data from the 'workout' table
            $title = $_POST['title'];
            $sql = "DELETE FROM membership WHERE title='$title'";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong>Your entry has been deleted successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Sorry!</strong>Your entry has not deleted successfully.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        }
    }

    // Close connection
    $conn->close();
    ?>

    <div class="row justify-content-center"> <!-- Center the content horizontally -->
        <div class="col-md-8"> <!-- Use Bootstrap column classes for responsiveness -->
            <div id="workout-info" class="text-center"> <!-- Center the content vertically -->
                <p id="workout-title">ADMINS PAGE</p>
                <p id="desc">Membership section</p>
            </div>
        </div>
    </div>

    <!-- Form Container -->
    <div class="container facility-container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div id="amenitiesForm" class="form-container">
                    <h3 class="text-center mb-4">Membership Form</h3>
                    <form action="admin-membership.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Enter amenities title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description" rows="3"
                                placeholder="Enter amenities description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="keyfeatures">Key Feature:</label>
                            <textarea class="form-control" id="keyfeatures" name="keyfeatures" rows="3"
                                placeholder="Enter key feature"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount:</label>
                            <input type="text" class="form-control" id="amount" name="amount"
                                placeholder="Enter amount">
                        </div>
                        <div class="form-group">
                            <label for="image">QR Image:</label>
                            <input type="file" class="form-control-file" id="image" name="image" />
                        </div>

                        <button type="submit" name="add" class="btn btn-outline-success">Add</button>
                        <button type="submit" name="delete" class="btn btn-outline-danger">Delete</button>
                        <button type="submit" name="update" class="btn btn-outline-warning">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>