                  <!--Author_Akash kumar-->  
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>C# </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="dashboard.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="Images/Techninow.png">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #165c8d;">
    <a class="navbar-brand" href="#"><img src="Images/logo1.png" id="logo" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="http://127.0.0.1:5500/index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://127.0.0.1:5500/privacy.html">Privacy Policy</a>
        </li>
      </ul>
      <?php
      session_start();
      if (!isset($_SESSION['username'])) {
        echo ' 
        <div class="mx-2">
        <a href="login.php"><button class="badge badge-pill badge-primary" style="padding:13px";>Login</button></a>
        <a href="signup.php"<button class="badge badge-pill badge-primary" style="padding:13px";>SignUp</button></a>
        </div>';
      }
      ?>
      <?php
      if (isset($_SESSION['username'])) {
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
            <p> Hello ' . $_SESSION['username'] . ' Welcome !   </p><hr>
            
            <a class="dropdown-item" href="#">Your profile</a>
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



  <main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main" style="border: .5px dotted rgb(230, 226, 226); background-color: rgb(255, 255, 255); margin-top: 20px;">

        <div class="blog-post">
          <h2 class="blog-post-title" style="text-align: center;">C# -Home</h2>


          <p> Python is a general-purpose interpreted, interactive, object-oriented, and high-level programming
            language. It was created by Guido van Rossum during 1985- 1990. Like Perl, Python source code is also
            available under the GNU General Public License (GPL). This tutorial gives enough understanding on Python
            programming language.</p>

          <strong> Why to Learn Python?</strong>
          <p>Python is a high-level, interpreted, interactive and object-oriented scripting language. Python is designed
            to be highly readable. It uses English keywords frequently where as other languages use punctuation, and it
            has fewer syntactical constructions than other languages.

            Python is a MUST for students and working professionals to become a great Software Engineer specially when
            they are working in Web Development Domain. I will list down some of the key advantages of learning Python:

            Python is Interpreted − Python is processed at runtime by the interpreter. You do not need to compile your
            program before executing it. This is similar to PERL and PHP.

            Python is Interactive − You can actually sit at a Python prompt and interact with the interpreter directly
            to write your programs.

            Python is Object-Oriented − Python supports Object-Oriented style or technique of programming that
            encapsulates code within objects.

            Python is a Beginner's Language − Python is a great language for the beginner-level programmers and supports
            the development of a wide range of applications from simple text processing to WWW browsers to games.</p>

          <h4>Characteristics of Python</h4>
          Following are important <strong>characteristics of Python</strong> Programming −

          <ol>
            1. It supports functional and structured programming methods as well as OOP.
          </ol>
          <ol>
            2. It can be used as a scripting language or can be compiled to byte-code for building large applications.
          </ol>

          <ol>
            3. It provides very high-level dynamic data types and supports dynamic type checking.
          </ol>

          <ol>
            4. It supports automatic garbage collection.
          </ol>

          <ol>
            5. It can be easily integrated with C, C++, COM, ActiveX, CORBA, and Java.
          </ol>


        </div><!-- /.blog-post -->
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

          <button type="button" class="btn btn-outline-info">Next</button>
          <a href="index.html"><button type="button" class="btn btn-outline-light">Home </button></a>
          <button type="button" class="btn btn-outline-dark">Prev</button>
        </div>
      </div><!-- /.blog-main -->


      <aside class="col-md-4 blog-sidebar">
        <div class="p-4" style="border: .5px dotted rgb(235, 227, 227); background-color: rgb(255, 254, 254); margin-top: 20px;">

          <h4 class="font-italic">C# Basic Tutorials</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">C# -Home</a></li>
            <li><a href="#">C# -Overview</a></li>
            <li><a href="#">C# -setup</a></li>
            <li><a href="#">C# -syntax</a></li>
            <li><a href="#">C# -variable types</a></li>
            <li><a href="#">C# -Basic operator</a></li>
            <li><a href="#">C# -Decision making</a></li>
            <li><a href="#">C# -Loops</a></li>
            <li><a href="#">C# -Numbers</a></li>
            <li><a href="#">C# -Strings</a></li>
            <li><a href="#">C# -Lists</a></li>
            <li><a href="#">C# -Tuples</a></li>
            <li><a href="#">C# -Dictionary</a></li>
            <li><a href="#">C# -Time & Date</a></li>
            <li><a href="#">C# -Functions</a></li>
            <li><a href="#">C# -Modules</a></li>
            <li><a href="#">C# -Files I/O</a></li>
            <h4 class="font-italic">C# Advanced Tutorials</h4>
            <li><a href="#">C# -Classes/objects</a></li>
            <li><a href="#">C# -Databases access</a></li>
            <li><a href="#">C# -Networking</a></li>
            <li><a href="#">C# -Sending Email</a></li>
            <li><a href="#">C# -Multithreading</a></li>
            <li><a href="#">C# -XML processing</a></li>
            <li><a href="#">C# -GUI programming</a></li>
          </ol>
        </div>


      </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

  </main>



  <!-- Site footer -->
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
            <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
            <li><a href="http://scanfcode.com/category/front-end-development/">Python</a></li>
            <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
            <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
            <li><a href="http://scanfcode.com/category/android/">Android</a></li>
            <li><a href="http://scanfcode.com/category/templates/">kotlin</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="http://scanfcode.com/about/">About Us</a></li>
            <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
            <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
            <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
            <li><a href="http://scanfcode.com/sitemap/"></a></li>
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
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>