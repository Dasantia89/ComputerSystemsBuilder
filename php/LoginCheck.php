<!DOCTYPE html>
<html class="no-js">
<head>
    <?php require 'SessionControl.php';?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>Computer Systems Builder - Logged In</title>
    <!-- Importing fonts -->
    <!-- Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400i|Source+Sans+Pro:300,400,600,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">

    <!-- Importing CSSs -->
    <link rel="stylesheet" href="/../plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/../plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/../plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="/../css/style.css">
    
</head>


<body id="body">

    <!-- Navigation bar -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
              
              <!-- The company name that is seen on the top of the page -->
                <a class="logotext" href="index.php">

                  <h4 class="font-weight-bold mb-4 font-size-40" style = "color:white;">

                    <img src="/../images/Logowhitepic.png" alt="Logo" style="max-width: 12%;" class="logo">
                    
                    <span style="color: #0457c4">C</span>omputer <span style="color: #0457c4">S</span>ystems <span style="color: #0457c4">B</span>uilder</h4></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-center text-lg-left">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Prebuilt_Sys.php">Prebuilts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Configure_Sys.php">Configure</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Support.php">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../My_Account.php">My Account</a>
                        </li>
                        <li>
                         <form target="paypal" class="nav-link" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="business" value="T6PUPL3QMRP6Q">
                            <input type="hidden" name="display" value="1">
                            <input type="image" src="/../images/shopping cart.png" style="height:35px; width:35px;" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                          </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Navigation bar finished -->
    <br><br><br><br><br>
    <!-- Main body -->
     
    <center><section class="section" style="padding-top:200px";>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center mb-5 mb-md-0">
                    <img id = "compImg" src="/../images/Logo.png" alt="iPhone" style="max-width: 40%;">
                </div>
                <div class="col-md-6 align-self-center text-center text-md-left">
                    <div class="block">
                        <h1 id = "success" class="font-weight-bold mb-4 font-size-60"></h1>
                        <p class="mb-4">
    <?php
      
      if($loggedin == true){
        echo '<script type="text/javascript">alert("You are already logged in."); window.location.href="/../index.php";</script>';
      }else{
      if(isset($_POST['username'])) 
	        $un = $_POST['username'];
      if(isset($_POST['password'])) 
	        $pw = $_POST['password'];
      $unorig = $un;
      $un = strtoupper($un);

      require_once 'query.php';
      $check = sendQuery("select user_name, user_pw, user_email, user_first, user_last from User where user_name = '$un';");
    
      $fn = $check[0]['user_first'];
      $ln = $check[0]['user_last'];
      $un = $check[0]['user_name'];
      if($check == null){
        echo '<script type="text/javascript"> alert("User not found.");  history.back(); </script> ';
    }else if (password_verify($pw, $check[0]['user_pw'])){
      $_SESSION['username'] = $un;
      $_SESSION['logmsg'] = ("Logged in as $unorig");
      $_SESSION['usernameorig'] = $unorig;

      echo '<script>document.getElementById("compImg").src = "/../images/Logo.png";</script>';
      echo '<script>document.getElementById("success").innerHTML = "Login Successful"</script>';
      echo "Welcome $fn $ln. You are now logged in as $unorig.<br>";
      date_default_timezone_set('EST5EDT');
      echo "The date and time is ".date("g:i a, l, F j, Y", time()).".<br><br>";
      echo '<script type="text/javascript"> 
            window.setTimeout(function() {
            window.location.href="/../index.php";
            }, 2000);</script>';
      }else {
       echo '<script type="text/javascript"> alert("Incorrect password.");  history.back(); </script>");';
     }
    } 
    ?>
       </p>
                       
                    </div>
                </div>
            </div>
        </div>  
    </section> </center>            
   <!--      -->

  <!-- Importing Scripts -->
    <script src="/../plugins/jquery-2.1.1.min.js"></script>
    <script src="/../plugins/bootstrap/bootstrap.min.js"></script>
    <script src="/../plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="/../plugins/magnific-popup/jquery.magnific.popup.min.js"></script>
    <script src="/../js/main.js"></script>
</body>
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
            <h6>Computer Parts</h6>
            <ul class="footer-links">
              <li><a href="#">Motherboards</a></li>
              <li><a href="#">CPUs</a></li>
              <li><a href="#">Graphics Cards</a></li>
              <li><a href="#">Power Supplies</a></li>
              <li><a href="#">Memory</a></li>
              <li><a href="#">Cases</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="index.php">Home</a></li>
              <li><a href="Support.php">Support</a></li>
              <li><a href="Configure_Sys.php">Configure</a></li>
              <li><a href="Prebuilt_Sys.php">Prebuilts</a></li>
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
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
    </footer>
</html>