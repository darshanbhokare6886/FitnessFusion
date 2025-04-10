<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet" />

  <!-- Css Styles -->
  <!-- Css Styles -->
  <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="./css/flaticon.css" type="text/css" />
  <link rel="stylesheet" href="./css/owl.carousel.min.css" type="text/css" />
  <link rel="stylesheet" href="./css/barfiller.css" type="text/css" />
  <link rel="stylesheet" href="./css/magnific-popup.css" type="text/css" />
  <link rel="stylesheet" href="./css/slicknav.min.css" type="text/css" />
  <link rel="stylesheet" href="user-plan.css" type="text/css" />

  <title>Fitness Fusion - Diet</title>
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
      background-color: #151515;
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

    /* .icons{
    height: 25px;
    width: 25px;
  } */
  </style>
</head>

<body>
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
          <li class="nav-item active">
            <a class="nav-link" href="user-home.php" style="font-size: 18px">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user-workout.php" style="font-size: 18px">Workouts</a>
          </li>
          <li class="nav-item">
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
  <!--nav ends-->

  <!-- Class Timetable Section Begin -->
  <div class="Timetable">
    <section class="class-timetable-section class-details-timetable spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="class-details-timetable_title">
              <h5 style="color: orangered4; font-size: 50px; margin-top: 40px;">
                Classes Timetable
              </h5>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="class-timetable details-timetable">
              <table>
                <thead>
                  <tr>
                    <th></th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                    <th>Sunday</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="class-time">6.00am - 8.00am</td>
                    <td class="dark-bg hover-dp ts-meta" data-tsmeta="workout">
                      <h5>WEIGHT LOOSE</h5>
                      <span>RLefew D. Loee</span>
                    </td>
                    <td class="hover-dp ts-meta" data-tsmeta="fitness">
                      <h5>Cardio</h5>
                      <span>RLefew D. Loee</span>
                    </td>
                    <td class="dark-bg hover-dp ts-meta" data-tsmeta="workout">
                      <h5>Yoga</h5>
                      <span>Keaf Shen</span>
                    </td>
                    <td class="hover-dp ts-meta" data-tsmeta="fitness">
                      <h5>Fitness</h5>
                      <span>Kimberly Stone</span>
                    </td>
                    <td class="dark-bg blank-td"></td>
                    <td class="hover-dp ts-meta" data-tsmeta="motivation">
                      <h5>Boxing</h5>
                      <span>Rachel Adam</span>
                    </td>
                    <td class="dark-bg hover-dp ts-meta" data-tsmeta="workout">
                      <h5>Body Building</h5>
                      <span>Robert Cage</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="class-time">10.00am - 12.00am</td>
                    <td class="blank-td"></td>
                    <td class="dark-bg hover-dp ts-meta" data-tsmeta="fitness">
                      <h5>Fitness</h5>
                      <span>Kimberly Stone</span>
                    </td>
                    <td class="hover-dp ts-meta" data-tsmeta="workout">
                      <h5>WEIGHT LOOSE</h5>
                      <span>RLefew D. Loee</span>
                    </td>
                    <td class="dark-bg hover-dp ts-meta" data-tsmeta="motivation">
                      <h5>Cardio</h5>
                      <span>RLefew D. Loee</span>
                    </td>
                    <td class="hover-dp ts-meta" data-tsmeta="workout">
                      <h5>Body Building</h5>
                      <span>Robert Cage</span>
                    </td>
                    <td class="dark-bg hover-dp ts-meta" data-tsmeta="motivation">
                      <h5>Karate</h5>
                      <span>Donald Grey</span>
                    </td>
                    <td class="blank-td"></td>
                  </tr>
                  <tr>
                    <td class="class-time">5.00pm - 7.00pm</td>
                    <td class="dark-bg hover-dp ts-meta" data-tsmeta="fitness">
                      <h5>Boxing</h5>
                      <span>Rachel Adam</span>
                    </td>
                    <td class="hover-dp ts-meta" data-tsmeta="motivation">
                      <h5>Karate</h5>
                      <span>Donald Grey</span>
                    </td>
                    <td class="dark-bg hover-dp ts-meta" data-tsmeta="workout">
                      <h5>Body Building</h5>
                      <span>Robert Cage</span>
                    </td>
                    <td class="blank-td"></td>
                    <td class="dark-bg hover-dp ts-meta" data-tsmeta="workout">
                      <h5>Yoga</h5>
                      <span>Keaf Shen</span>
                    </td>
                    <td class="hover-dp ts-meta" data-tsmeta="motivation">
                      <h5>Cardio</h5>
                      <span>RLefew D. Loee</span>
                    </td>
                    <td class="dark-bg hover-dp ts-meta" data-tsmeta="fitness">
                      <h5>Fitness</h5>
                      <span>Kimberly Stone</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="class-time">7.00pm - 9.00pm</td>
                    <td class="hover-dp ts-meta" data-tsmeta="motivation">
                      <h5>Cardio</h5>
                      <span>RLefew D. Loee</span>
                    </td>
                    <td class="dark-bg blank-td"></td>
                    <td class="hover-dp ts-meta" data-tsmeta="fitness">
                      <h5>Boxing</h5>
                      <span>Rachel Adam</span>
                    </td>
                    <td class="dark-bg hover-dp ts-meta" data-tsmeta="workout">
                      <h5>Yoga</h5>
                      <span>Keaf Shen</span>
                    </td>
                    <td class="hover-dp ts-meta" data-tsmeta="motivation">
                      <h5>Karate</h5>
                      <span>Donald Grey</span>
                    </td>
                    <td class="dark-bg hover-dp ts-meta" data-tsmeta="fitness">
                      <h5>Boxing</h5>
                      <span>Rachel Adam</span>
                    </td>
                    <td class="hover-dp ts-meta" data-tsmeta="workout">
                      <h5>WEIGHT LOOSE</h5>
                      <span>RLefew D. Loee</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- Class Timetable Section End -->

  <!-- Pricing Section Begin -->
  <section class="pricing-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <span style="font-size: 50px">Our Plan</span>
            <h2>Choose your pricing plan</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-8">
          <div class="ps-item">
            <h3>STAY FIT</h3>
            <div class="pi-price">
              <span style="font-size: 35px; color: orangered">Bulking</span>
            </div>
            <ul>
              <li>Protein oatmeal topped</li>
              <li>Scrambled eggs with cheese</li>
              <li>Greek yogurt parfait with granola</li>
              <li>Protein shake made with whey protein powder</li>
              <li>Cottage cheese with pineapple</li>
              <li>Greek yogurt with mixed nuts and dried fruit</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-8">
          <div class="ps-item">
            <h3>STAY FIT</h3>
            <div class="pi-price">
              <span style="font-size: 35px; color: orangered">cuting</span>
            </div>
            <ul>
              <li>Cottage cheese with pineapple chunks</li>
              <li>Carrot and cucumber sticks with hummus</li>
              <li>Protein smoothie with whey protein, banana, and spinach</li>
              <li>Apple slices with almond butter</li>
              <li>Rice cakes with cottage cheese and sliced strawberries</li>
              <li>Hard-boiled eggs with a sprinkle of salt and pepper</li>
              <!-- Added content -->
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-8">
          <div class="ps-item">
            <h3>STAY FIT</h3>
            <div class="pi-price">
              <span style="font-size: 35px; color: orangered">weight loss</span>
            </div>
            <ul>
              <li>Overnight oats with almond milk</li>
              <li>Turkey and vegetable stir-fry</li>
              <li>Protein smoothie made with spinach</li>
              <li>Weight losing classes</li>
              <li>Low-fat Greek yogurt</li>
              <li>Greek yogurt with a few dark chocolate chips</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing Section End -->

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