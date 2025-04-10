<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fitness Fusion - Contact Us</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-gXw1Wt46k/7jgkFsLr2lVfwG2tbyjfuO3p+9FmrBQo1hIy2PqkDm/I8dxOqs9RCrFzQj2dMZ36qgDH19J5zE9Q==" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
 
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- <script>
    $(document).ready(function(){
      $('#get-in-touch').on('click', function(){
        $('#contact-form').toggleClass('d-none');
      });
    });
  </script> -->
  <script>
    // $(document).ready(function(){
    //   $('#get-in-touch').on('click hover', function(){
    //     $('#contact-form').toggleClass('d-none');
    //   });
    // });
    // <script>
$(document).ready(function() {
  $('#get-click').on({
    click: function() {
      $('#contact-form').toggleClass('d-none');
    }
});
$('#get-in-touch').on({
    mouseenter: function() {
      // Show the form on hover (if it's currently hidden)
      if ($('#contact-form').hasClass('d-none')) {
        $('#contact-form').removeClass('d-none');
      }
    },
    mouseleave: function() {
      // Hide the form on mouseleave (if toggled visible on hover)
      if (!$('#contact-form').hasClass('d-none')) {
        $('#contact-form').addClass('d-none');
      }
    }
  });
});
</script>

  <style>
    body {
      background-color: #000; /* Black background */
      color: #fff; /* White text */
    }
   
    /* Image hover effect */
    .img-hover:hover {
      transform: scale(1.05); /* Increase scale on hover */
    }
    /* Section hover effect */
    .section-hover:hover {
      background-color: #ff4500; /* Lighter orange-red background on hover */
    }
    /* Navbar background */
    .navbar {
      background-color: #000; /* Black background for the navbar */
    }
    /* Active page color */
    .navbar-nav .nav-item.active .nav-link {
      color: #ff4500 !important; /* Orange-red color for the active page */
    }
    /* Hover color for the navigation items */
   
    .navbar-nav .nav-link:hover {
  color: #ff4500 !important; /* Add !important for higher specificity */
}

    /* Align items in navbar */
    .navbar-nav {
      display: flex;
      align-items: center;
      margin-right: -180px;
    }
    .navbar-nav .nav-item {
      margin-right: 10px; /* Adjust spacing between items */
      margin-left: 10px;
    }
    .navbar .container {
  padding-left: 0;
  padding-right: 0;
  padding-top: 20px;
  padding-bottom: 0;
  margin-top: -20px;
}
.icons a:hover i {
    color: #ff5e00;  /* Hover color (blue) */
  }
  
    a, .nav-link, .btn {
      color: #ff4500;
    }

    /* Custom styles for "Get in Touch" and "Location" sections */
    #get-in-touch, #location {
      color: #ff4500; /* Orange-red text color */
      font-family: 'Helvetica', sans-serif; /* Same font family as "Get in Touch" */
    }
    #get-in-touch:hover{
        color:rgb(30, 58, 242);
    }
    .icons {
  margin-bottom: 0; /* Remove bottom margin */
}

/* Adjust the margin between icons */
.icons a {
  margin-right: 15px; /* Adjust as needed */
  size:50px;
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
  position: relative; /* Added */
}

#desc {
  position: absolute; /* Added */
  bottom: -30px; /* Added */
  left: 50%; /* Added */
  transform: translateX(-50%); /* Added */
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
    <img src="logo.png" alt="Fitness Fusion Logo" class="h-12 w-auto mr-2" style="margin-left: -140px;">
    <a class="navbar-brand font-bold" href="#" style="font-size: 24px;margin-left: -10px;">Fitness Fusion</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link dropdown-toggle" href="#" style="font-size: 18px;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <li class="nav-item active">
            <a class="nav-link" href="user-contactus.php" style="font-size: 18px;">Contact Us</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="user-aboutus.php" style="font-size: 18px; ">About Us</a>
        </li>
        
      </ul>
    </div>
  </div>
  
</nav>
<hr style="border-color: white;margin-top: -0px;">
<!--nav ends-->

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
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            // SQL query to update data in the 'workout' table
            $sql = "INSERT INTO `cpdb`.`contactus` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message');";

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
        } 
    }

    // Close connection
    $conn->close();
    ?>
  
<div class="container">
  <p id="workout-title">CONTACT US</p>
  <p id="desc"> LET THE FITNESS BEGIN</p>
</div>
<!-- Contact Section -->
<section class="container mx-auto py-5">
  <div class="row justify-content-center" style="color:#fff; background-color:#000; margin-top: -70px;">
    <div class="col-md-6">
      <div id="contact-form" class="card text-center d-none">
        <div id="get-click" class="card-header bg-dark text-white">
          <h5>Get In Touch</h5>
        </div>
        
        <div class="card-body">
          <h4 class="mb-4">Send us a Message</h4>
          <form action="user-contactus.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email address" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="add" >Submit</button>
          </form>
        </div>
      </div>
      <div class="text-center mt-4">
        <p id="get-in-touch" style="font-size: 25px;">Get In Touch</p>
        <p><b><i><h4>OR</h4></i></b></p>
        <br>
        <p style="font-size: 20px;">JUST SEND US AN EMAIL ON</p>
        <p><strong><a href="mailto:fitnessfusioninfo@vit.com" style="color: #ffffff;">fitnessfusioninfo@vit.com</a></strong></p>
        <p>CONNECT WITH US ON</p>

        <div class="icons">
          <a href="#" class="me-3 text-reset">
            <i class="fab fa-facebook fa-lg"></i>
          </a>
          <a href="#" class="me-3 text-reset">
            <i class="fab fa-instagram fa-lg"></i>
          </a>
          <a href="#" class="me-3 text-reset">
            <i class="fab fa-whatsapp fa-lg"></i>
          </a>
        </div>
      </div>
      
    </div>
  </div>
</section>
<!-- End Contact Section -->

<!-- Map Section -->
<section id="location" class="container mx-auto py-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h3 class="text-center mb-4" style="margin-top: -70px;"><a href="https://www.google.com/maps"  target="_blank">Location</a></h3>
     <!-- Embed your map here -->
     <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.009209078787!2d73.87457821446095!3d18.470554587437187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b98185c26c67%3A0x4dc34719cf14871f!2sVishwakarma%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1638352021602!5m2!1sen!2sin" allowfullscreen></iframe>
    </div>
    </div>
  </div>
</section>
<!-- End Map Section -->


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
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-+OuGIFfKco3g6xvMS9c3z4LG5OjkQvyH3Gnn6v29c7W2L5sy2gnwMLg12cRw1QbTq2Zn2CvKP+Pp8Y25vjbIzg==" crossorigin="anonymous"></script>

</body>
</html>
