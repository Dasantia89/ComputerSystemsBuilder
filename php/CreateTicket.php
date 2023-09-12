<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Computer Systems Builder - Create Ticket</title>

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
                    
                    <span style="color: #0457c4">C</span>omputer <span style="color: #0457c4">S</span>ystems <span style="color: #0457c4">B</span>uilder</h4></a><h4 style="color:white;"><?php require 'SessionControl.php'; echo $logmsg;?></h4>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-center text-lg-left">
                        <li class="nav-item">
                            <a class="nav-link" href="/../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/../Prebuilt_Sys.php">Prebuilts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/../Configure_Sys.php">Configure</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/../Support.php">Support</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/../Login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/../My_Account.php">My Account</a>
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
    
<!-- html form -->
<center><div style="padding-top: 100px;">
<br><br><br><br>
<h1>Support Ticket Form </h1>
<form method="post" action="TicketCreated.php"  enctype="multipart/form-data">
<br>
<pre>First Name:     <input type="text" name="firstname" required><br>
Last Name:      <input type="text" name="lastname" required><br>
Email:          <input type="text" name="email" required>
</pre>
<br> 
<pre>
What do you need support with? <select name="support" size="1">
<option value="1">Choosing a prebuilt system</option>
<option value="2">Finding an upgrade</option> 
<option value="3">Questions about an order</option>
<option value="4">Website troubleshooting</option> 
<option value="5">Other</option> 

</select>
</pre>
<br><br>
<p>
<label for="info">Other info<br>you would<br> like to share:<br></label>

<textarea name="info" rows="10" cols="50"></textarea>
</p>

<pre>
Upload a picture (JPG,GIF, or PNG File): <input type='file' name='filename'>

</pre>

<pre>
<input type = "submit" class="btn btn-main" value="Submit">&nbsp;<input type="reset" class="btn btn-main" value="Reset">
               
</pre>
</form>
</div></center>
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
            <h6>Legal</h6>
            <ul class="footer-links">
              <li><a href="../ToS.php">Terms of Service</a></li>
              <li><a href="../Privacy.php">Privacy Policy</a></li>
              <li><a href="../ToS.php#refunds">Refund Policy</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="../index.php">Home</a></li>
              <li><a href="../index.php">About Us</a></li>
              <li><a href="../Prebuilt_Sys.php">Prebuilts</a></li>
              <li><a href="../Configure_Sys.php">Configure</a></li>
              <li><a href="../Support.php">Support</a></li>
              <li><a href="../Login.php">Login</a></li>
              <li><a href="../My_Account.php">My Account</a></li>
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

</html>