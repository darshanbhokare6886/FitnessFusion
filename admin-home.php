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

    h1 {
      margin-top: 20px;
      font-weight: 900;
      font-size: 18px;
      margin-left: 180px;

    }


    h2 {
      margin-top: 20px;
      font-weight: 900;
      font-size: 18px;
      margin-left: 180px;
    }

    ol {
      margin-left: 180px;
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
          <li class="nav-item active">
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
          <li class="nav-item">
            <a class="nav-link" href="admin-contactus-data.php" style="font-size: 18px">Contact Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin-payment-data.php" style="font-size: 18px">Payment Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin-offer.php" style="font-size: 18px">Offer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user-home.php" style="font-size: 18px">Log Out</a>
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
        <p id="desc">Home Section</p>
      </div>
    </div>
  </div>

  <!-- Form Container -->

  <h1>Admin Instructions for Gym Website Management</h1>

  <h2>Login to Admin Panel:</h2>
  <ol>
    <li>Open your web browser and navigate to the admin login page of the gym website.</li>
    <li>Enter your username and password to log in to the admin panel.</li>
  </ol>

  <h2>Navigate to Data Management Section:</h2>
  <ol>
    <li>Once logged in, you'll see a dashboard or a menu. Look for an option like "Data Management", "Content
      Management", or "Admin Tools".</li>
  </ol>

  <h2>Adding New Content:</h2>
  <ol>
    <li>To add new content, such as workout routines or program details, find the "Add New" button or link.</li>
    <li>Click on it to open a form or editor where you can input the relevant information.</li>
    <li>Fill in all the necessary fields, such as title, description, images, and any other relevant details.</li>
    <li>Once you've entered all the information, look for a "Save" or "Publish" button to make the content live on the
      website.</li>
  </ol>

  <h2>Updating Existing Content:</h2>
  <ol>
    <li>To update existing content, navigate to the section where the content is listed, such as "Workouts" or
      "Programs".</li>
    <li>Find the specific content item you want to update and click on it to open the editing interface.</li>
    <li>Modify the information as needed, such as changing the description, adding new images, or updating any other
      details.</li>
    <li>After making the changes, remember to save or update the content to ensure the changes are reflected on the
      website.</li>
  </ol>

  <h2>Deleting Content:</h2>
  <ol>
    <li>If you need to remove outdated or irrelevant content, locate the item you want to delete within the appropriate
      section.</li>
    <li>Look for an option like "Delete" or a trash bin icon next to the content item.</li>
    <li>Click on the delete option, and you may be prompted to confirm the action.</li>
    <li>Confirm the deletion, and the content will be permanently removed from the website.</li>
  </ol>

  <h2>Reviewing Changes:</h2>
  <ol>
    <li>After adding, updating, or deleting content, it's a good practice to visit the user-facing website to ensure the
      changes appear as intended.</li>
    <li>Navigate through the relevant sections to verify that the new information is visible and accurate.</li>
  </ol>

  <h2>Troubleshooting:</h2>
  <ol>
    <li>If you encounter any issues while adding, updating, or deleting content, refer to any documentation provided by
      the website developer or contact technical support for assistance.</li>
    <li>Pay attention to error messages or notifications that may indicate what went wrong, such as missing required
      fields or permission issues.</li>
  </ol>

  <h2>Regular Maintenance:</h2>
  <ol>
    <li>Make it a habit to periodically review and update the content on the website to keep it relevant and engaging
      for users.</li>
    <li>Regularly check for any outdated information or broken links and take appropriate actions to maintain the
      quality of the website.</li>
  </ol>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>