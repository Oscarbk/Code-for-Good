<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Grayscale - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script
      src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"
      crossorigin="anonymous"
    ></script>
    <!-- Google fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Varela+Round"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/regis.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    
  </head>
  <body id="page-top" class = "">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav22">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html"
          >Start Bootstrap</a
        >
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="login.html">Login</a>
              </li>
            </ul>
          </div>
      </div>
    </nav>
    <!-- Masthead-->

    <!-- Signup-->

    <!-- Contact-->
    <section class="contact-section">
      <div class="main-container">
        <form action="" method="post">
          <h2>Login</h2>
          
          
          
          <div class="form-group">
            <input
              type="email"
              class="form-control"
              name="email"
              placeholder="Email"
              required="required"
            />
          </div>
          <div class="form-group">
            <input
              type="password"
              class="form-control"
              name="password"
              placeholder="Password"
              required="required"
            />
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">
              Login
            </button>
          </div>
        </form>
      </div>
    </section>

	<?php
	  session_start();
	  require_once('../../backend/connectionVars.php');
	  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	  $email    = $_POST['email'];
	  $password = $_POST['password'];
	  $query = "SELECT * FROM user WHERE email = '$email'";
	  $data  = mysqli_query($dbc, $query);
	  $row   = mysqli_fetch_array($data);
	  
	  $_SESSION['role'] = $row['role'];
	  $_SESSION['fname'] = $row['fname'];
	  $_SESSION['lname'] = $row['lname'];
	  $_SESSION['vhours'] = $row['vhours'];
	  $_SESSION['vtype'] = $row['vtype'];
	  $_SESSION['contribution'] = $row['contribution'];

	  $logged = isset($_SESSION['fname']);
	  if (strcmp($_SESSION['fname'], '') != 0)
	  {
		  header('Location: ./leader.php');
	  }
	  else
	    echo 'Please enter a valid email and password.';
	?>
    
    <div class="socialmedia">
      <a class="mx-2" href="https://twitter.com/ALSFlorida"><i class="fab fa-twitter"></i></a>
      <a class="mx-2" href="https://www.facebook.com/ALSFlorida"><i class="fab fa-facebook-f"></i></a>
  </div>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
      <div class="container">Copyright ?? Your Website 2020</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
</html>
