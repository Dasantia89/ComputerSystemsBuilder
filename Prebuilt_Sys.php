<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Computer Systems Builder - Prebuilts</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Importing fonts -->
    <!-- Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400i|Source+Sans+Pro:300,400,600,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">

    <!-- Importing CSSs -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">
    <!-- Navigation bar -->
   <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
              
              <!-- The company name that is seen on the top of the page -->
                <a class="logotext" href="index.php">

                  <h4 class="font-weight-bold mb-4 font-size-40" style = "color:white;">

                    <img src="images/Logowhitepic.png" alt="Logo" style="max-width: 12%;" class="logo">
                    
                    <span style="color: #0457c4">C</span>omputer <span style="color: #0457c4">S</span>ystems <span style="color: #0457c4">B</span>uilder</h4></a><h4 style="color:white;">
                    <?php require 'php/SessionControl.php'; echo $logmsg;?></h4>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-center text-lg-left">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AboutUs.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Prebuilt_Sys.php">Prebuilts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Configure_Sys.php">Configure</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Support.php">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="My_Account.php">My Account</a>
                        </li>
                        <li class="nav-item">
                         <form class="nav-link" target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" >
                          <input type="hidden" name="cmd" value="_cart">
                          <input type="hidden" name="business" value="KBDPTVRM369L2">
                          <input type="hidden" name="display" value="1">
                          <input type="image" src="../images/shopping cart.png" style="height:35px; width:35px;" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                          <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                          </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
      <!-- Navigation bar finished -->
   <br><br><br><br><br>
<!--<form action="php/dbtest.php">
  <button class="btn btn-main" type="submit">Register</button></form>-->


     <!-- Importing Scripts -->
    <script src="plugins/jquery-2.1.1.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/magnific-popup/jquery.magnific.popup.min.js"></script>
    <script src="js/main.js"></script>

  <center>
    <h1 style="padding-top: 75px; padding-bottom: 50px;">I need a system for...</h1>
    <a href="#gaming">
      <img src="images/Gaming Page Logo.png" style="width:50%">
    </a>
    <br><br>
    <a href="#business">
      <img src="images/Business Page Logo.png" style="width:50%">
    </a>
  </center>

<div id="gaming">

  <center><h1 style="padding-top: 150px">Gaming Systems</h1></center>

  <div class="row" style="padding-top: 100px">

    <div class="column" style="margin-left:auto; margin-right:auto; display:block;">
      
      <div class="pc">
        <a href="Prebuilts/Desktop1.php"><img src="images/slider images/PC1.jpg"></a>
        <a href="Prebuilts/Desktop1.php"><img src="images/PC Specs/PC1 Spec T.png" class="img-top"></a>
      </div>

      <div class="pc">
        <a href="Prebuilts/Desktop2.php"><img src="images/slider images/PC2.jpg"></a>
        <a href="Prebuilts/Desktop2.php"><img src="images/PC Specs/PC2 Spec T.png" class="img-top"></a>
      </div>

      <div class="pc">
        <a href="Prebuilts/Desktop3.php"><img src="images/slider images/PC3.jpg"></a>
        <a href="Prebuilts/Desktop3.php "><img src="images/PC Specs/PC3 Spec T.png" class="img-top"></a>
      </div>

    </div>

  </div>

  <div class="row" style="padding-top: 100px">

    <div class="column" style="margin-left:auto; margin-right:auto; display:block;">

      <div class="pc">
        <a href="Prebuilts/Desktop4.php"><img src="images/slider images/PC4.jpg"></a>
        <a href="Prebuilts/Desktop4.php"><img src="images/PC Specs/PC4 Spec T.png" class="img-top"></a>
      </div>

      <div class="pc">
        <a href="Prebuilts/Desktop5.php"><img src="images/slider images/PC5.jpg" style="width:200px"></a>
        <a href="Prebuilts/Desktop5.php"><img src="images/PC Specs/PC5 Spec T.png" class="img-top"></a>
      </div>

      <div class="pc">
        <a href="Prebuilts/Desktop6.php"><img src="images/slider images/PC6.jpg" style="width:200px"></a>
        <a href="Prebuilts/Desktop6.php"><img src="images/PC Specs/PC6 Spec T.png" class="img-top"></a>
      </div>

    </div>
  
  </div>
    
  <div class="row" style="padding-top: 100px">

    <div class="column" style="margin-left:auto; margin-right:auto; display:block;">
      
      <div class="pc">
        <a href="Prebuilts/Desktop7.php"><img src="images/slider images/PC7.jpg" style="width:200px"></a>
        <a href="Prebuilts/Desktop7.php"><img src="images/PC Specs/PC7 Spec T.png" class="img-top"></a>
      </div>

      <div class="pc">
        <a href="Prebuilts/Desktop8.php"><img src="images/slider images/PC8.jpg" style="width:200px"></a>
        <a href="Prebuilts/Desktop8.php"><img src="images/PC Specs/PC8 Spec T.png" class="img-top"></a>
      </div>

      <div class="pc">
        <a href="Prebuilts/Desktop9.php"><img src="images/slider images/PC9.jpg" style="width:200px"></a>
        <a href="Prebuilts/Desktop9.php"><img src="images/PC Specs/PC9 Spec T.png" class="img-top"></a>
      </div>
      
    </div>

  </div>

</div>

<div id="business">

  <center><h1 style="padding-top: 150px">Business Systems</h1></center>

  <div class="row" style="padding-top: 100px">

    <div class="column" style="margin-left:auto; margin-right:auto; display:block;">
      
      <div class="pc">
        <a href="Prebuilts/Business1.php"><img src="images/desktopBusiness1.png" style="width:300px"></a>
        <a href="Prebuilts/Business1.php"><img src="images/PC Specs/BC1 Spec T.png" class="img-top" style="width:250px"></a>
      </div>

      <div class="pc">
        <a href="Prebuilts/Business2.php"><img src="images/desktopBusiness2.jpg" style="width:300px"></a>
        <a href="Prebuilts/Business2.php"><img src="images/PC Specs/BC2 Spec T.png" class="img-top" style="width:300px"></a>
      </div>

      <div class="pc">
        <a href="Prebuilts/Business3.php"><img src="images/desktopBusiness3.jpg" style="width:300px"></a>
        <a href="Prebuilts/Business3.php"><img src="images/PC Specs/BC3 Spec T.png" class="img-top" style="width:300px"></a>
      </div>

    </div>

  </div>

  <div class="row" style="padding-top: 100px">

    <div class="column" style="margin-left:auto; margin-right:auto; display:block;">

      <div class="pc">
        <a href="Prebuilts/Business4.php"><img src="images/desktopBusiness4.jpg" style="width:300px"></a>
        <a href="Prebuilts/Business4.php"><img src="images/PC Specs/BC4 Spec T.png" class="img-top" style="width:300px"></a>
      </div>

      <div class="pc">
        <a href="Prebuilts/Business5.php"><img src="images/desktopBusiness5.png" style="width:250px"></a>
        <a href="Prebuilts/Business5.php"><img src="images/PC Specs/BC5 Spec T.png" class="img-top" style="width:300px"></a>
      </div>

      <div class="pc">
        <a href="Prebuilts/Business6.php"><img src="images/desktopBusiness6.webp" style="width:315px"></a>
        <a href="Prebuilts/Business6.php"><img src="images/PC Specs/BC6 Spec T.png" class="img-top" style="width:300px"></a>
      </div>

    </div>
  
  </div>
    
  <div class="row" style="padding-top: 100px; padding-bottom: 100px">

    <div class="column" style="margin-left:auto; margin-right:auto; display:block;">

      <div class="pc">
        <a href="Prebuilts/Business7.php"><img src="images/desktopBusiness7.jpg" style="width:300px"></a>
        <a href="Prebuilts/Business7.php"><img src="images/PC Specs/BC7 Spec T.png" class="img-top" style="width:300px"></a>
      </div>

      <div class="pc">
        <a href="Prebuilts/Business8.php"><img src="images/desktopBusiness8.webp" style="width:300px"></a>
        <a href="Prebuilts/Business8.php"><img src="images/PC Specs/BC8 Spec T.png" class="img-top" style="width:300px"></a>
      </div>

      <div class="pc">
        <a href="Prebuilts/Business9.php"><img src="images/desktopBusiness9.webp" style="width:400px"></a>
        <a href="Prebuilts/Business9.php"><img src="images/PC Specs/BC9 Spec T.png" class="img-top" style="width:300px"></a>
      </div>

    </div>
  
  </div>

</div>


<!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify"> Computer Systems Builder is a website that offers a personally tailored shopping experience for both retail customers as well as businesses.
              <i>We offer both computer parts and prebuilt systems, allowing us to best suit your computing needs. No matter if it's a gaming system you're trying to build or you need to purchase machines for your office building, CSB has you covered.</i>
            </p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Legal</h6>
            <ul class="footer-links">
              <li><a href="ToS.php">Terms of Service</a></li>
              <li><a href="Privacy.php">Privacy Policy</a></li>
              <li><a href="ToS.php#refunds">Refund Policy</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="index.php">Home</a></li>
              <li><a href="index.php">About Us</a></li>
              <li><a href="Prebuilt_Sys.php">Prebuilts</a></li>
              <li><a href="Configure_Sys.php">Configure</a></li>
              <li><a href="Support.php">Support</a></li>
              <li><a href="Login.php">Login</a></li>
              <li><a href="My_Account.php">My Account</a></li>
            </ul>
          </div>

        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by Team CSB, LLC.
         <a href="#">CSB</a>
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="https://www.facebook.com/Computer-Systems-Builder-100117778372716/?modal=admin_todo_tour"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="https://twitter.com/BuilderComputer"><i class="fa fa-twitter"></i></a></li>
              <li><a class="instagram" href="https://www.instagram.com/computersystemsbuilder/"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="https://www.linkedin.com/feed/?trk=onboarding-landing"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</body>