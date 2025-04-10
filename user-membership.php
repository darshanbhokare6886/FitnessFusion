<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fitness Fusion - About Us</title>
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
  <link rel="stylesheet" href="user-membership.css" />

  <style>
    body {
      background-color: #000;
      /* Black background */
      color: #fff;
      /* White text */
    }

    /* Image hover effect */
    .img-hover:hover {
      transform: scale(1.05);
      /* Increase scale on hover */
    }

    /* Section hover effect */
    .section-hover:hover {
      background-color: #ff4500;
      /* Lighter orange-red background on hover */
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

    .icons a:hover i {
      color: #ff5e00;
      /* Hover color (blue) */
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
    /* .icons{
      height: 25px;
      width: 25px;
    } */
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
          <li class="nav-item">
            <a class="nav-link" href="user-home.php" style="font-size: 18px">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user-workout.php" style="font-size: 18px">Workouts</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="user-membership.php" style="font-size: 18px">Membership</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" style="font-size: 18px" id="navbarDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Facilities
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="user-program.php">Programs</a>
              <a class="dropdown-item" href="user-amenities.php">Amenities</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user-gallery.php" style="font-size: 18px">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user-contactus.php" style="font-size: 18px">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user-aboutus.php" style="font-size: 18px">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <hr style="border-color: white" />
  <div class="container">
    <p id="workout-title">MEMBERSHIP</p>
    <p id="desc">Join Our Fitness Family</p>
  </div>

  <!-- Section for dynamically generated membership plans -->
  <section class="section__container price__container" id="price">
    <h2 class="section__header">Our Pricing</h2>
    <p class="section__description">
      Our pricing plan comes with various membership tiers, each tailored to
      cater to different preferences and fitness aspirations.
    </p>
    <div class="price__grid">
      <?php
      // Database credentials
      $servername = "localhost"; // Replace with your server name
      $username = "root"; // Replace with your database username
      $password = ""; // Replace with your database password
      $database = "cpdb"; // Replace with your database name
      
      // Create connection
      $conn = new mysqli($servername, $username, $password, $database);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } 
      // else {
      //   echo "Connected successfully";
      // }

      // Now you can perform database operations using $conn
      
      // Assuming you have established a database connection
// Fetch data from your MySQL database table
      $sql = "SELECT * FROM membership";
      $result = mysqli_query($conn, $sql);
      
      // Check if any rows are returned
      if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <div class="price__card">
            <div class="price__content">
              <h4 class="heading"><?php echo $row["title"]; ?></h4>
              <img src="price-2.png" alt="price" />
              <p><?php echo $row["description"]; ?></p>
              <hr />
              <h4>Key Features</h4>
              <?php
              // Split key features by comma and display each in a <p> tag
              $key_features = explode(",", $row["keyfeatures"]);
              foreach ($key_features as $feature) {
                echo "<p>" . trim($feature) . "</p>";
              }
              ?>
            </div>
            <h2 style="margin-bottom: 20px;"><?php echo $row["amount"]; ?></h2>
            <a href="user-payment.php?title=<?php echo urlencode($row['title']); ?>" class="btn">Join Now</a>
          </div>
          <?php
        }
      } else {
        echo "No membership plans found";
      }

      // Close database connection
      mysqli_close($conn);
      ?>

    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center text-lg-start bg-body-tertiary text-muted" style="color: white">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" style="color: white">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block" style="color: white">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->
      <!-- Right -->
      <div class="icons">
        <a href="#" class="me-4 mr-4 text-reset">
          <i class="fa-brands fa-facebook"></i>
        </a>
        <a href="#" class="me-4 mr-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="me-4 mr-4 text-reset">
          <i class="fas fa-envelope"></i>
        </a>
        <a href="www.instagram.com" class="me-4 mr-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="www.linkedin.com" class="me-4 text-reset">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5" style="color: white">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4" style="color: white">
              <i class="fas fa-gem me-3"></i>Fitness Fusion
            </h6>
            <p style="color: white">
              Fuse your fitness. Get the results you crave in a fun and
              motivating atmosphere.
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Useful links</h6>
            <p>
              <a href="user-membership.php" class="text-reset">Memberships</a>
            </p>
            <p>
              <a href="user-amenities.php" class="text-reset">Facilities</a>
            </p>
            <p>
              <a href="user-gallery.php" class="text-reset">Gallery</a>
            </p>
            <p>
              <a href="user-aboutus.php" class="text-reset">About Us</a>
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p>
              <i class="fas fa-home me-3"></i> Vishwakarma Institute of
              Technology, Pune
            </p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              fitnessfusion@vit.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 91 234 567 88</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
    <br style="color: rgb(239, 236, 236)" />
    <hr style="border-color: white" />
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05); color: #fff">
      © 2024 Copyright:
      <a class="text-reset fw-bold" style="color: white" href="user-home.php">FitnessFusion.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>