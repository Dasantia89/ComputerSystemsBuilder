<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Computer Systems Builder - Ticket Created</title>
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
                            <a class="nav-link" href="index.php">Home</a>
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

<body>

  <?php

    # Recieving the html form data
    if(isset($_POST['firstname'])) 
    $fn = $_POST['firstname'];
    if(isset($_POST['lastname'])) 
    $ln = $_POST['lastname'];
    if(isset($_POST['username'])) 
    $un = $_POST['username'];
    if(isset($_POST['password'])) 
    $pw = $_POST['password'];
    if(isset($_POST['email'])) 
    $em = $_POST['email']; 
    $unorig = $un;
    $emorig = $em;
    $un = strtoupper($un);
    $em = strtoupper($em);   
    
    require 'query.php';
    $check = sendQuery("select * from User where user_name = '$un';");
    if($check != null){
      
      echo ("<script type='text/javascript'> alert('Username taken.'); history.back(); </script>");
    }else{
      $check = sendQuery("select * from User where user_email = '$em';");
      if($check != null){
        echo ("<script type='text/javascript'> alert('Email is already in use.'); history.back(); </script>");
      }else{
     
      echo ("<form method='post' action='RegistrationSuccess.php' enctype='multipart/form-data' id = 'form'>
      <br>
      <input type='hidden' name = 'firstname'     value='$fn' >
      <input type='hidden' name = 'lastname'      value='$ln' >
      <input type='hidden' name = 'username'      value='$un' >
      <input type='hidden' name = 'password'      value='$pw' >
      <input type='hidden' name = 'email'         value='$em' >
      <input type='hidden' name = 'usernameorig'  value='$unorig' >
      <input type='hidden' name = 'emailorig'     value='$emorig' >
      </form></div></center>
      <script>document.getElementById('form').submit();</script>");
      }
    }    

    ?>
  </body>
  
</html>