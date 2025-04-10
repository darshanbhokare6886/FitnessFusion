<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FitnessFusion</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="user-home-pop.css">
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/6.1.0/css/mdb.min.css" rel="stylesheet">

</head>

<body>
  <style>
    body {
      background: #000000;
    }

    .vdo {
      margin: 0;
    }

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

    .btn-up {
      margin-top: -150px;
      /* Adjust the value to bring the button upwards */
      background-color: #ff4500;
      color: #000;
      font-weight: bold;
    }

    .card-container {
      margin-top: -350px;
    }

    .p4 {
      margin-left: 40px;
      margin-top: 100px;
    }

    .p5 {
      margin-top: -250px;
    }

    /* Hover effect for icons */
    .btn-floating.btn-lg.text-white:hover {
      color: orange;
    }

    .text {
      color: white;
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
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container mx-auto">
        <img src="logo.png" alt="Fitness Fusion Logo" class="h-12 w-auto mr-2">
        <a class="navbar-brand font-bold" href="#" style="font-size: 24px;">Fitness Fusion</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="user-home.php" style="font-size: 18px;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user-workout.php" style="font-size: 18px;">Workouts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user-membership.php" style="font-size: 18px;">Membership</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" style="font-size: 18px;" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Facilities
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="user-program.php">Programs</a>
                <a class="dropdown-item" href="user-amenities.php">Amenities</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user-gallery.php" style="font-size: 18px;">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user-contactus.php" style="font-size: 18px;">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user-aboutus.php" style="font-size: 18px;">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin-login.php" style="font-size: 18px;">Admin Login</a>
            </li>

          </ul>
        </div>
      </div>

    </nav>
    <hr style="color: rgb(255, 255, 255)" />

    <div class="popup-container" id="popupContainer">
      <!-- Popup content -->
      <div class="popup-content">
        <!-- <h2 class="head">Welcome to!</h2> -->
        <h2 class="titl">FITNESS FUSION</h2>
        <?php
        // Step 1: Establish a connection to your MySQL database
        $servername = "localhost"; // Replace with your server name
        $username = "root"; // Replace with your MySQL username
        $password = ""; // Replace with your MySQL password
        $dbname = "cpdb"; // Replace with your database name
        
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        // Step 2: Retrieve the data from the table
        $sql = "SELECT title, description FROM offer"; // Replace with your table name
        $result = $conn->query($sql);

        // Step 3: Echo the data within your HTML code
        if ($result->num_rows > 0) {
          // Output data of each row
          while ($row = $result->fetch_assoc()) {
            echo '<h2 class="head">' . $row["title"] . '</h2>';
            echo '<p class="offer">' . $row["description"] . '</p>';
          }
        } else {
          echo "0 results";
        }

        // Close the connection
        $conn->close();
        ?>

        <div class="button-container">
          <button onclick="redirectToMembership()">Explore Now</button>
          <button onclick="skipPopup()">Skip</button>
        </div>
      </div>
    </div>

    <script>
      // Function to redirect to the membership page
      function redirectToMembership() {
        window.location.href = "user-membership.php"; // Replace with your membership page URL
      }

      // Function to close the popup and redirect to the homepage
      function skipPopup() {
        document.getElementById("popupContainer").style.display = "none";
        // Redirect to the homepage
        window.location.href = "user-home.php"; // Replace with your homepage URL
      }
    </script>

  </body>


</html>
<!-- <video class="vdo" width="1500px" height="800px"autoplay muted loop>
        <source src="ANIMATEDLOGO_1709920443722.mp4" type="video/mp4">
    </video> -->

<section>
  <section class="parallax-1">
    <p class="para1">FITNESS FUSION GYM,PUNE</p>
    <h1 class="heading">
      THE GYM FOR HIGH IMPACT ATHLETES
    </h1>
    <p class="para1">Where Fitness Becomes Your Lifestyle</p>
    <div class="parallax-inner">


    </div>
  </section>
  <h2 class="headingparallax1">ABOUT US</h2>
  <br>
  <p class="p1">WE ARE NOT JUST A GYM,<br>
    <br>
    WE ARE A WHOLE COMMUNITY <BR>
    <BR></BR>WHICH HELPS TO <BR>
    </BR>ELEVATE YOUR FITNESS GAME
  </p>
  <div class="text-center">
    <button type="button" class="btn btn-outline-warning btn-up"><a href="about.html"></a>ABOUT US</button>
  </div>
  <!-- <p class="p2">A team of highly trained fitness trainers dedicated to your overall fitness, offering a distinct range of fitness options for everyone who wants to live a healthy and energetic lifestyle.</p> -->

  <section class="parallax-2">
    <div class="parallax-inner">
      <!-- <h1>Parallax Effect</h1> -->
      <p class="p1">HARDER. BETTER. FASTER. STRONGER.</p>
    </div>
  </section>
  <h2 class="headingparallax1">Features</h2>
  <p class="p1">WHAT WE OFFER</p>
  <div class="card-container">
    <div class="card">
      <img src="certify-removebg-preview.png" alt="Certified Trainers" width="40px" height="40px">
      <h2 class="head">Certified Trainers</h2>
      <p class="para">All our trainers are certified and well mannered so you get proper training and you feel most
        comfortable!</p>
    </div>
    <div class="card">
      <img src="equipmengt-removebg-preview.png" alt="Certified Trainers" width="40px" height="40px">
      <h2 class="head">Best Equipment</h2>
      <p class="para">We have equipped the gym with latest and best in class machines, so your workout is most
        effective.

      </p>
    </div>
    <div class="card">
      <img src="personal-removebg-preview.png" alt="Certified Trainers" width="40px" height="40px">
      <h2 class="head">Personalized Training</h2>
      <p class="para">Our personal trainers are ready to take up the challenge with you, and help you achieve your
        health goals.</p>
    </div>
  </div>
  <section class="parallax-3">
    <div class="parallax-inner">
      <!-- <h1>Scroll Up</h1> -->
      <div class="container">
        <div class="text">
          <p class="p4">KNOW MORE ABOUT US</p>
          <h2 class="p5"> DISCOVER WHAT SETS US APART FROM THE OTHERS</h2>
        </div>
        <div class="video-container">
          <video id="myVideo" controls>
            <source src="Muscle-Tree-Gym.webm.crdownload" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div id="playButton" onclick="toggleFullscreen()">&#9658;</div>
        </div>
      </div>

    </div>
  </section>
  <section class="banner">
    <div class="banner-content">
      <h2 class="h">5500+ </h2>
      <h2 class="hh"> Happy and Healthy Members</h2>
      <h2 class="h">***** </h2>
      <br>
      <h2 class="hh">The Workout You Crave, The Results You Deserve.</h2>
      <h2 class="h0">Achieve the physical transformation you've always dreamed of</h2>
      <br>
      <p class="p0">
        Providing a diverse selection of health and wellness options for individuals seeking a vibrant lifestyle.</p>
    </div>
    <div class="banner-image">
    </div>
  </section>

</section>

<footer class="text-center bg-dark text-white">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#!" role="button"><i
          class="fab fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#!" role="button"><i
          class="fab fa-twitter"></i></a>

      <!-- Google -->
      <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#!" role="button"><i
          class="fab fa-google"></i></a>

      <!-- Instagram -->
      <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#!" role="button"><i
          class="fab fa-instagram"></i></a>

      <!-- Linkedin -->
      <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#!" role="button"><i
          class="fab fa-linkedin"></i></a>
      <!-- Github -->
      <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#!" role="button"><i
          class="fab fa-github"></i></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2020 Copyright:
    <a class="text-body" href="user-home.php">FitnessFusion.com</a>
  </div>
  <!-- Copyright -->
</footer>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>