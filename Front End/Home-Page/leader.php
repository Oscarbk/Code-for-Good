<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      .container-wrapper{
        display:flex;

      }
    </style>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ALS - The Florida Chapter</title>
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
    <link href="css/leader.css" rel="stylesheet" />
    
  </head>
  <body id="page-top" class = "">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav22">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html"
          >ALS - The Florida Chapter</a
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
                <a class="nav-link js-scroll-trigger" href="../../backend/logout.php">Log out</a>
              </li>
            </ul>
          </div>
      </div>
    </nav>
    <!-- Masthead-->

    <!-- Signup-->

    <?php
	  session_start();
	  $hidden = 'hidden';
	  if ($_SESSION['role'] == 1)
	    $hidden = 'visible';
	
	  ?>
    
    <!-- Contact-->
    <section class="contact-section">
      <div class = "container-wrapper">
        <div class="main-container" visibility: <?php echo $hidden?>>
          <form action="" method="post">
            <h2>Log Volunteer Hours</h2>
            
            
            
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
                type="text"
                class="form-control"
                name="password"
                placeholder="Number of Hours"
                required="required"
              />
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success btn-lg btn-block">
                Log Hours
              </button>
            </div>
          </form>
        </div>
      <div class = "main-container">
        <h2> 
	<p> <?php echo $_SESSION['fname'] . ' has volunteered ' . $_SESSION['vhours'] . ' hours';	?></p>
        </h2>

      </div>
  
      </div>
     
      
      <h2 class = "aligned">Hours Leaderboard</h2>
      <table class = "hoursLeader">
        <tbody>
          <tr>
              <th>Rank</th>
              <th>Name </th>
              <th>Hours</th>
          </tr>
          <tr>
            <td>🥇</td>
            <td>Jessie</td>
            <td>300</td>
          </tr>
          <tr>
            <td>🥈</td>
            <td>Bob</td>
            <td>200</td>
          </tr>
          <tr>
            <td>🥉</td>
            <td>Adam</td>
            <td>150</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Judy</td>
            <td>149</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Charlie</td>
            <td>100</td>
          </tr>
        </tbody>
      </table>

      <h2 class = "aligned">Organizations Leaderboard</h2>
      <table class = "organizationsLeader">
        <tbody>
          <tr>
              <th>Rank</th>
              <th>Organization</th>
              <th>Hours</th>
          </tr>
          <tr>
            <td>🥇</td>
            <td>JP Morgan Chase & CO.</td>
            <td>10000</td>
          </tr>
          <tr>
            <td>🥈</td>
            <td>JP Morgan Chase Foundation</td>
            <td>8500</td>
          </tr>
          <tr>
            <td>🥉</td>
            <td>NIKE Inc</td>
            <td>7000</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Sony Corp. of America</td>
            <td>5000</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Universal Studios</td>
            <td>3000</td>
          </tr>
        </tbody>
      </table>

    </section>
    
    <div class="socialmedia">
      <a class="mx-2" href="https://twitter.com/ALSFlorida"><i class="fab fa-twitter"></i></a>
      <a class="mx-2" href="https://www.facebook.com/ALSFlorida"><i class="fab fa-facebook-f"></i></a>
  </div>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
      <div class="container">Copyright © Your Website 2020</div>
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
