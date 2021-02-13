   <!--Author_Akash kumar-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Techninow</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="dashboard.css">
  <link rel="icon" href="Images/Techninow.png">

</head>

<body>
  <!--Nav bar start-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #165c8d;">
    <a class="navbar-brand" href="#"><img src="Images/logo1.png" id="logo" alt="logo" style="height: 50px; width:200px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="privacy.php">Privacy Policy</a>
        </li>
      </ul>
     
        <?php
      session_start();
      if (!isset($_SESSION['username']))
      {
        echo ' 
        <div class="mx-2">
        <a href="login.php"><button class="badge badge-pill badge-primary" style="padding:13px";>Login</button></a>
        <a href="signup.php"<button class="badge badge-pill badge-primary" style="padding:13px";>SignUp</button></a>
        </div>';
      } 
      ?>
      <?php
      if (isset($_SESSION['username']))
      {
        echo '<form class="form-inline my-0 my-lg-0">
        <div class="btn-group dropbottom">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
            <img src="Images/user.png" width="40" height="40" class="rounded-circle">
            <span>
            
           ' . $_SESSION['username'] . '
                       
              </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <p> Hello ' . $_SESSION['username'] .' Welcome !   </p><hr>
            
            <a class="dropdown-item" href="dashboard.php">Your profile</a>
            <a class="dropdown-item" href="#">Edit Profile</a>
            <a class="dropdown-item" href="#">Help</a>
            <a class="dropdown-item" href="logout.php">Log Out</a>
          </div>
        </li>   
      </ul>
    </div>
  
      </form>';
      }
      ?>
      </div>
    </div>
  </nav>
  <!-- Nav bar End -->





  <!-- site big image Middleware start -->
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Images/pic1.jpg" class="d-block w-100" alt="...">

      </div>
      <div class="carousel-item">
        <img src="Images/maxresdefault.jpg" class="d-block w-100" alt="...">
      </div>
    
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- site big image Middleware end -->


  <!--tutorials library start-->
  <div class="container my-5">
    <h1 style="text-align: center; font-family: Arial, Helvetica, sans-serif;">Tutorials Library</h1>
    <div class="card-deck my-5 text-center">

      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <a href="c.php"><img src="images/C.png" alt=""></a>
          <a href="c.php"><h4 class="my-0 font-weight-normal">C</h4></a>
        </div>
        <div class="card-header">
          <a href="html.php"><img src="images/html5.png" alt="html" style="height: 110px;"></a>
          <a href="html.php"><h4 class="my-0 font-weight-normal">html</h4></a>
        </div>
        <div class="card-header">
          <a href="Android.php"><img src="images/Android.png" alt="Android" style="height: 110px;"></a>
          <a href="Android.php"><h4 class="my-0 font-weight-normal">Android</h4></a>
        </div>
        <div class="card-header">
          <a href="Ruby.php"><img src="images/ruby.png" alt="Ruby" style="height: 110px;"></a>
          <a href="Ruby.php"><h4 class="my-0 font-weight-normal">Ruby</h4></a>
        </div>

      </div>

      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <a href="cpp.php"><img src="images/c++.png" alt="c++" style="height: 120px;"></a>
          <a href="cpp.php"><h4 class="my-0 font-weight-normal">C++</h4></a>
        </div>
        <div class="card-header">
          <a href="css.php"><img src="images/CSS.png" alt="css" style="height: 110px;"></a>
          <a href="css.php"><h4 class="my-0 font-weight-normal">Css</h4></a>
        </div>
        <div class="card-header">
          <a href="kotlin.php"><img src="images/kotlin.png" alt="kotlin" style="height: 110px;"></a>
          <a href="kotlin.php"><h4 class="my-0 font-weight-normal">Kotlin</h4></a>
        </div>
        <div class="card-header">
          <a href="j-quary.php"><img src="images/j-quary.png" alt="j-quary" style="height: 110px;"></a>
         <a href="j-quary.php"> <h4 class="my-0 font-weight-normal">j-quary</h4></a>
        </div>

      </div>



      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <a href="java.php"><img src="images/java.png" alt="java" style="height: 120px;"></a>
          <a href="java.php"><h4 class="my-0 font-weight-normal">Java</h4></a>
        </div>
        <div class="card-header">
          <a href="javascript.php"><img src="images/javascript.png" alt="js" style="height: 110px;"></a>
          <a href="javascript.php"><h4 class="my-0 font-weight-normal">JavaScript</h4></a>
        </div>
        <div class="card-header">
          <a href="c#.php"><img src="images/cs.png" alt="c#" style="height: 110px;" ></a>
          <a href="c#.php"><h4 class="my-0 font-weight-normal">C#</h4></a>
        </div>
        <div class="card-header">
          <a href="sql.php"><img src="images/SQL.png" alt="SQL" style="height: 110px;"></a>
         <a href="sql.php"> <h4 class="my-0 font-weight-normal">Sql</h4></a>
        </div>

      </div>



      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <a href="python.php"><img src="images/python.png" alt="python" style="height: 120px;"></a>
         <a href="python.php"><h4 class="my-0 font-weight-normal">Python</h4></a> 
        </div>
        <div class="card-header">
          <a href="php.php"><img src="images/PHPs.png" alt="php" style="height: 110px;"></a>
          <a href="php.php"><h4 class="my-0 font-weight-normal">Php</h4></a>
        </div>
        <div class="card-header">
          <a href="swift.php"><img src="images/swift.png" alt="swift" style="height: 110px;"></a>
          <a href="swift.php"><h4 class="my-0 font-weight-normal">Swift</h4></a>
        </div>
        <div class="card-header">
          <a href="scala.php"><img src="images/scala.png" alt="Scala" style="height: 110px;"></a>
         <a href="scala.php"> <h4 class="my-0 font-weight-normal">Scala</h4></a>
        </div>

      </div>

    </div>
  </div>
  <!--tutorials library end-->




  <!-- Site footer start -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About Us</h6>
          <p class="text-justify">Techninow.com <i>A RIGHT PLACE TO START.</i> We will help programmers build up
            concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript,
            PHP, Android, SQL and Algorithm. Techninow focuses on providing the most efficient code or snippets as the
            code wants to be simple. </p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links">
            <li><a href="c.php">C</a></li>
            <li><a href="python.php">Python</a></li>
            <li><a href="php.php">PHP</a></li>
            <li><a href="java.php">Java</a></li>
            <li><a href="Android.php">Android</a></li>
            <li><a href="kotlin.php">kotlin</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="About.php">About Us</a></li>
            <li><a href="privacy.php">Privacy Policy</a></li>
            <li><a href="#"></a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by
            <a href="#">Techninow</a>
            <span>Developer</span>
            <a href="#">Akash Bhopewal</a>
          </p>

        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href=" https://www.facebook.com/Techninow/"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!--footer end-->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>
