<?php
// Check if form is submitted for login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    // Database connection
    $servername = "localhost"; // Change this to your servername
    $username = "root"; // Change this to your username
    $password = ""; // Change this to your password
    $dbname = "cpdb"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get username and password from form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL query to check if username and password exist in database
    $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Redirect to offer.php if credentials are correct
        header("Location: admin-home.php");
        exit();
    } else {
        // Display alert for invalid credentials
        echo "<script>alert('Invalid username or password');</script>";
    }

    $conn->close();
}

// Check if form is submitted for changing username
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['change_username'])) {
    // Database connection
    $servername = "localhost"; // Change this to your servername
    $username = "root"; // Change this to your username
    $password = ""; // Change this to your password
    $dbname = "cpdb"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get old and new username from form
    $old_username = $_POST['old_username'];
    $new_username = $_POST['new_username'];

    // SQL query to update username
    $sql = "UPDATE login SET username='$new_username' WHERE username='$old_username'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Username changed successfully');</script>";
    } else {
        echo "<script>alert('Error updating username: " . $conn->error . "');</script>";
    }

    $conn->close();
}

// Check if form is submitted for changing password
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['change_password'])) {
    // Database connection
    $servername = "localhost"; // Change this to your servername
    $username = "root"; // Change this to your username
    $password = ""; // Change this to your password
    $dbname = "cpdb"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get username and new password from form
    $username = $_POST['username'];
    $new_password = $_POST['new_password'];

    // SQL query to update password
    $sql = "UPDATE login SET password='$new_password' WHERE username='$username'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Password changed successfully');</script>";
    } else {
        echo "<script>alert('Error updating password: " . $conn->error . "');</script>";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>common-layout</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-gXw1Wt46k/7jgkFsLr2lVfwG2tbyjfuO3p+9FmrBQo1hIy2PqkDm/I8dxOqs9RCrFzQj2dMZ36qgDH19J5zE9Q==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    body {
      background-color: #000;
      /* Black background */
      color: #fff;
      /* White text */
    }

    .container-center {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin-top: 20px;
    }

    .login-container {
      background-color: rgba(255, 255, 255, 0.2);
      /* Transparent white background */
      padding: 50px;
      border-radius: 10px;
      margin-bottom: 250px;
    }

    .login-form {
      text-align: center;
    }

    .login-form input[type="text"],
    .login-form input[type="password"],
    .login-form button {
      margin-bottom: 20px;
      padding: 15px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      display: block;
      /* Display elements as block for vertical layout */
      width: 100%;
      /* Set width to 100% */
      color: black;
      /* Set font color to black */
    }

    .login-form button {
      background-color: #ff4500;
      /* Orange-red background */
      color: #fff;
      /* White text */
      cursor: pointer;
    }

    .login-form button:hover {
      background-color: #ff5e00;
      /* Lighter orange-red on hover */
    }

    .change-form {
      margin-top: 30px;
    }

    .change-form input[type="text"],
    .change-form input[type="password"],
    .change-form button {
      margin-bottom: 20px;
      padding: 15px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      display: block;
      width: 100%;
      color: black;
    }

    .change-form button {
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
    }

    .change-form button:hover {
      background-color: #0056b3;
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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="user-home.php" style="font-size: 18px">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user-workout.php" style="font-size: 18px">Workout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user-membership.php" style="font-size: 18px">Membership</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" style="font-size: 18px" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

  <div class="row justify-content-center"> <!-- Center the content horizontally -->
    <div class="col-md-8"> <!-- Use Bootstrap column classes for responsiveness -->
      <div id="workout-info" class="text-center"> <!-- Center the content vertically -->
        <p id="workout-title">ADMINS PAGE</p>
        <p id="desc">Login Here</p>
      </div>
    </div>
  </div>

  <!-- Centered container with login form -->
  <div class="container-center">
    <div class="login-container">

      <div class="login-form">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <input type="text" name="username" placeholder="Enter ID">
          <input type="password" name="password" placeholder="Enter Password">
          <button type="submit" name="login">Login</button>
          <p style="font-size: large; margin-right: 50px;">
            Forgot <a style="color:orangered;" href="#" onclick="toggleChangeForm('change-username-form')">Username</a>/
            <a style="color:orangered;" href="#" onclick="toggleChangeForm('change-password-form')">Password</a>
          </p>
        </form>
      </div>

      <!-- Change Username Form -->
      <div class="change-form" id="change-username-form" style="display: none;">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <input type="text" name="old_username" placeholder="Old Username">
          <input type="text" name="new_username" placeholder="New Username">
          <button type="submit" name="change_username">Change Username</button>
        </form>
      </div>

      <!-- Change Password Form -->
      <div class="change-form" id="change-password-form" style="display: none;">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <input type="text" name="username" placeholder="Username">
          <input type="password" name="new_password" placeholder="New Password">
          <button type="submit" name="change_password">Change Password</button>
        </form>
      </div>

    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    function toggleChangeForm(formId) {
      var forms = document.getElementsByClassName("change-form");
      for (var i = 0; i < forms.length; i++) {
        if (forms[i].id === formId) {
          forms[i].style.display = "block";
        } else {
          forms[i].style.display = "none";
        }
      }
    }
  </script>
</body>

</html>