<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fitness Fusion - About Us</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-gXw1Wt46k/7jgkFsLr2lVfwG2tbyjfuO3p+9FmrBQo1hIy2PqkDm/I8dxOqs9RCrFzQj2dMZ36qgDH19J5zE9Q=="
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    body {
      background-color: #000000;
      /* Orange-red background */
      color: #ffffff;
      /* White text */
    }

    .container {
      position: relative;
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

    /* Navbar background */
    .navbar {
      background-color: #000;
      /* Black background for the navbar */
    }

    /* Navbar hover effect */
    .navbar-nav .nav-link:hover {
      color: #ff4500 !important;
      /* Yellow color on hover */
    }

    /* Active page color */
    .navbar-nav .nav-item.active .nav-link {
      color: #ff4500 !important;
      /* Orange-red color for the active page */
    }

    /* Align items in navbar */
    .navbar-nav {
      display: flex;
      align-items: left;
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

    /* Sponsor images */
    .sponsor-logo {
      max-width: 100%;
      max-height: 100%;
      display: block;
      margin: 0 auto;
      transition: transform 0.3s ease-in-out;
    }

    .sponsor-logo:hover {
      transform: scale(1.1);
    }

    /* Hover effect for About Gym */
    #about-team:hover #team-members {
      display: block;
    }

    /* About Gym background color */
    #about-gym {
      background-color: black;
      transition: background-color 0.3s;
    }

    #about-gym:hover {
      background-color: grey;
      /* Lighter orange-red background on hover */
    }

    /* About Team background color */
    #about-team {
      background-color: black;
      transition: background-color 0.3s;
    }

    #about-team:hover {
      background-color: grey;
      /* Lighter orange-red background on hover */
    }

    /* Sponsors background color */


    section#sponsors {
      padding: 20px;
      /* Adjust padding as needed */
      background-color: #000000;
      /* Initial black background */
      transition: background-color 0.3s ease;
      /* Smooth transition on hover */
    }

    section#sponsors:hover {
      background-color: orangered;
      /* Orange-red on hover */
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

  </style>
  </head>

  <body class="font-sans">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container mx-auto">
        <img src="logo.png" alt="Fitness Fusion Logo" class="h-12 w-auto mr-2">
        <a class="navbar-brand font-bold" href="#" style="font-size: 24px;">Fitness Fusion</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
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
            <li class="nav-item active">
              <a class="nav-link" href="user-aboutus.php" style="font-size: 18px;">About Us</a>
            </li>

          </ul>
        </div>
      </div>

    </nav>
    <hr style="border-color: white;">
    <!--nav ends-->
    <div class="container">
      <p id="workout-title">ABOUT US</p>
      <p id="desc">Our Story, Your Success</p>
    </div>
    <!-- About Gym Section -->
    <!-- About Gym Section -->
    <section id="about-gym" class="py-20 bg-gradient-to-r from-black-600 to-red-400 section-hover">
      <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">

        <div class="md:w-1/2 mb-6 md:mb-0">
          <img src="gym.jpg" alt="Fitness Gym" class="img-fluid rounded-lg shadow-lg img-hover" style="width: 600px;">
        </div>


        <div class="md:w-1/2 text-center md:text-left">
          <h2 class="text-4xl font-bold mb-6 cursor-pointer" onclick="toggleHistory()">About Gym</h2>
          <p class="text-lg leading-relaxed" style="font-size: 25px;"><b>Founded with a vision to revolutionize fitness,
              our gym has been a cornerstone of the community, catering to fitness enthusiasts of all levels.</p></b>
          <p id="history" class="hidden mt-8 text-lg">Fitness Fusion Gym, established in 2008 in Pune, has been at the
            forefront of promoting health and wellness in the community. What began as a humble endeavor has flourished
            into a renowned fitness destination with six branches across Pune. Our journey is rooted in a commitment to
            providing top-notch facilities, expert guidance, and a supportive environment for individuals to achieve
            their fitness goals. With a diverse range of classes, state-of-the-art equipment, and a team of experienced
            trainers, we cater to the needs of fitness enthusiasts of all levels. At Fitness Fusion Gym, we believe in
            the fusion of fitness disciplines, innovation, and personalized attention to empower our members to lead
            healthier, happier lives.</p>
        </div>
      </div>
    </section>

    <!-- About Team Section -->
    <section id="about-team" class="py-20 bg-gray-900 section-hover">
      <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
        <div class="md:w-1/2 mb-6 md:mb-0 text-center md:text-left">

          <h2 class="text-4xl font-bold mb-6 cursor-pointer" onclick="toggleTeam()">About Team</h2>
          <p class="text-lg" style="font-size: 25px;"><b>Our dedicated team of certified gym instructors is committed to
              helping you achieve your fitness goals through personalized training programs and expert guidance.</p></b>
          <div id="team-members" class="hidden mt-8">
            <div class="flex justify-center space-x-6">
              <div>
                <img src="instructor1.jpg" alt="Instructor 1" class="rounded-full w-24 h-24 img-hover">
                <p class="mt-2 text-lg font-semibold">Bhupesh Chavan</p>
              </div>
              <div>
                <img src="instructor2.jpg" alt="Instructor 2" class="rounded-full w-24 h-24 img-hover">
                <p class="mt-2 text-lg font-semibold">Darshan Bhokare</p>
              </div>
              <div>
                <img src="instructor3.jpg" alt="Instructor 3" class="rounded-full w-24 h-24 img-hover">
                <p class="mt-2 text-lg font-semibold">Bhavesh Chaudhari</p>
              </div>
              <div>
                <img src="instructor4.jpg" alt="Instructor 4" class="rounded-full w-24 h-24 img-hover">
                <p class="mt-2 text-lg font-semibold">Emily Davis</p>
              </div>
            </div>
          </div>
        </div>

        <div class="md:w-1/2 d-flex justify-content-end">
          <img src="team.jpg" alt="Fitness Team" class="rounded-lg shadow-lg img-hover">
        </div>


      </div>
    </section>


    <!-- Sponsors Section -->
    <section id="sponsors" class="py-20 bg-to-r from-black to-orangered section-hover">

      <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-8">Sponsors</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
          <div class="flex justify-center items-center">
            <img src="sponsor1.jpg" alt="Sponsor 1" class="sponsor-logo">
          </div>
          <div class="flex justify-center items-center">
            <img src="sponsor2.jpg" alt="Sponsor 2" class="sponsor-logo">
          </div>
          <div class="flex justify-center items-center">
            <img src="sponsor3.jpg" alt="Sponsor 3" class="sponsor-logo">
          </div>
          <div class="flex justify-center items-center">
            <img src="sponsor4.jpg" alt="Sponsor 4" class="sponsor-logo">
          </div>
        </div>
      </div>
    </section>


    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted" style="color: white;">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" style="color: white;">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block" style="color: white;">
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
        <div class="container text-center text-md-start mt-5" style="color: white;">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4" style="color: white;">
                <i class="fas fa-gem me-3"></i>Fitness Fusion
              </h6>
              <p style="color: white;">
                Fuse your fitness.
                Get the results you crave in a fun and motivating atmosphere.
              </p>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Useful links
              </h6>
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
              <p><i class="fas fa-home me-3"></i> Vishwakarma Institute of Technology, Pune</p>
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
      <br style="color: rgb(239, 236, 236)">
      <hr style="border-color: white;">
      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05); color:#fff ">
        © 2024 Copyright:
        <a class="text-reset fw-bold" style="color: white;" href="user-home.php">FitnessFusion.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script>
      function showHistory() {
        var history = document.getElementById("history");
        history.style.display = "block";
      }

      function hideHistory() {
        var history = document.getElementById("history");
        history.style.display = "none";
      }

      function showTeam() {
        var teamMembers = document.getElementById("team-members");
        teamMembers.style.display = "block";
      }

      function hideTeam() {
        var teamMembers = document.getElementById("team-members");
        teamMembers.style.display = "none";
      }

      document.addEventListener('DOMContentLoaded', function () {
        var aboutGym = document.getElementById('about-gym');
        var aboutTeam = document.getElementById('about-team');

        aboutGym.addEventListener('mouseover', showHistory);
        aboutGym.addEventListener('mouseout', hideHistory);

        aboutTeam.addEventListener('mouseover', showTeam);
        aboutTeam.addEventListener('mouseout', hideTeam);
      });
    </script>

  </body>

</html>