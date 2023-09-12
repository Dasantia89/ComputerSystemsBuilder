<!DOCTYPE html>
<html class="no-js">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Computer Systems Builder - Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Importing fonts -->
    <!-- Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400i|Source+Sans+Pro:300,400,600,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">

    <!-- Importing CSSs -->
    <link rel="stylesheet" href="../plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/owl-carousel/owl.carousel.css">
    
    <link rel="stylesheet" href="../plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      .txt-center {
      text-align: center;
      }
      .hide {
          display: none;
      }
      .clear {
          float: none;
          clear: both;
      }
      .rating {
          width: 250px;
          unicode-bidi: bidi-override;
          direction: rtl;
          text-align: center;
          position: relative;
      }
      .rating > label {
          float: center;
          display: inline;
          padding: 0;
          margin: 0;
          position: relative;
          width: 1.1em;
          cursor: pointer;
          color: #000;
      }
      .rating > label:hover,
      .rating > label:hover ~ label,
      .rating > input.radio-btn:checked ~ label {
          color: transparent;
      }
      .rating > label:hover:before,
      .rating > label:hover ~ label:before,
      .rating > input.radio-btn:checked ~ label:before,
      .rating > input.radio-btn:checked ~ label:before {
          content: "\2605";
          position: absolute;
          left: 0;
          color: #FFD700;
      }
      .checked {
        color: orange;
      }
      
    </style>
</head>

<body id="body">

    <!-- Navigation bar -->
     <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
              
              <!-- The company name that is seen on the top of the page -->
                <a class="logotext" href="../index.php">

                  <h4 class="font-weight-bold mb-4 font-size-40" style = "color:white;">

                    <img src="../images/Logowhitepic.png" alt="Logo" style="max-width: 12%;" class="logo">
                    
                    <span style="color: #0457c4">C</span>omputer <span style="color: #0457c4">S</span>ystems <span style="color: #0457c4">B</span>uilder</h4></a><h4 style="color:white;"><?php require '../php/SessionControl.php'; echo $logmsg;?></h4>
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
                            <a class="nav-link" href="../AboutUs.php">About Us</a>
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

    <!-- Main body -->
    <center>
    <section class="section" style="padding-top: 200px">
        <div>
          <h1>Office Tier 4</h1>
          <img class="img-fluid" src="../images/desktopBusiness5.png" alt="" style="">
          <br>
          <br>
          <h3 class="textcolor">$750.00</h3>
        </div><br>
        <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="6NGZVFEXJBVAE">
        <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form><br><br><h3>Average User Rating:</h3>
        <?php 
      require_once '../php/query.php';
        $query = 'select AVG(user_rating) AS avg from User_Rating where prebuilt_id = 14;';
        $result = sendQuery($query);
        if($result[0]['avg'] == NULL){
          echo 'Product has not yet been rated.';
        }else{
           $avg = round($result[0]['avg']);
          echo '<h2>';
          for($i = 0;$i<$avg;$i++){
            echo '<span class="fa fa-star checked"></span>';
          }
          $diff = 5-$avg;
          for ($i = 0;$i<$diff; $i++)
          {
            echo '<span class="fa fa-star"></span>';
          }
          echo '</h2>';
        }  ?>
        <hr style="border-top: 1px solid #26272b;">

        <div style="padding-top: 30px">
          <h2>Description:</h2>
          <p>With an i7 processor, 16 GB of high-speed RAM, and 2 TB of solid-state storage, this system is meant to handle the most demanding tasks you can throw at it.</p>
          <p>This Tier 4 System is meant to be a processing powerhouse. This computer is perfect for large databases, remote connections, and large Quickbooks company files.</p>
          <p>NOTE: This system includes a 1-year subscription to Microsoft Office 365!</p>
        </div>

        <div style="padding-top: 30px; padding-bottom: 30px;">
          <h2>Specs:</h2>
          <p>Processor: Intel i7-8700</p>
          <p>Graphics: Intel Integrated Graphics</p>
          <p>RAM: 16GB DDR4 2666MHz</p>
          <p>Storage: 2TB SSD</p>
          <p>Power Supply: 600W Bronze Certified</p>
        </div><hr style="border-top: 1px solid #26272b;"><br>

        <?php
        if(isset($_POST['rating'])){ // User has submitted a rating for this prebuilt so it is sent to database
          $rating = $_POST['rating'];
          $review = $_POST['review'];
          
          $query = ("insert into User_Rating (user_name,prebuilt_id,user_rating,user_review,user_rating_date) values ('$username',14,$rating,'$review',CURRENT_DATE());");
          $result = sendQuery($query);
         
        }else { // Check if user has made a review for this prebuilt
        $query = ("select * from User_Rating where prebuilt_id = 14 AND user_name = '$username';");
        $result = sendQuery($query);
        if($result == NULL){  //User has not made a rating for this prebuilt 
        $query = ("SELECT oi.prebuilt_id from `Order` o JOIN Order_Item oi ON o.order_id = oi.order_id where o.user_name = '$username' AND oi.prebuilt_id = 14;");
            $result = sendQuery($query);
          
            if($result != NULL){ // User owns this prebuilt and is eligible to make a review
          echo '<form id="review" method="post" action="Business5.php"  enctype="multipart/form-data" ">
          <h2><strong>Write a review</strong></h2><br>
            <div class="rating">
              <input id="star5" name="rating" type="radio" value="5" class="radio-btn hide" />
              <label style = "font-size:40px;" for="star5">☆</label>
              <input id="star4" name="rating" type="radio" value="4" class="radio-btn hide" />
              <label style = "font-size:40px;" for="star4">☆</label>
              <input id="star3" name="rating" type="radio" value="3" class="radio-btn hide" />
              <label style = "font-size:40px;" for="star3">☆</label>
              <input id="star2" name="rating" type="radio" value="2" class="radio-btn hide" />
              <label style = "font-size:40px;" for="star2">☆</label>
              <input id="star1" name="rating" type="radio" value="1" class="radio-btn hide" />
              <label style = "font-size:40px;" for="star1">☆</label>
              <div class="clear"></div></div><div style = "background-color:#26272b;width:400px;height:400px;padding:20px;vertical-align:top;text-align:left;">
            <div style = "background-color:white;width:360px;height:360px;vertical-align:top;text-align:left;">
              <textarea form="review" style="width:360px;height:330px;background-color:blue; color:white;font-size:20px;vertical-align: top;" name = "review"></textarea><input type="submit" style="height:30px;width:360px;" value="Submit Review">
            </div>
          </div>
          </form><br>
          <hr style="border-top: 1px solid #26272b;">';
            }
        }
        }

        echo ("<div><h1><strong>User Reviews</strong></h1><hr>");
        $query = ("select * FROM User u JOIN User_Rating ur ON u.user_name = ur.user_name where ur.prebuilt_id = 14;");
        $results = sendQuery($query);
        if($results == NULL){
          echo '<h3>There are no reviews for this product.</h3>';
        }else{
        foreach($results as $row){
          $rating = $row['user_rating'];
          $review = $row['user_review'];
          $date = substr($row['user_rating_date'],0,10);
          $user = $row['user_name'];
          $userpic = $row['user_pic'];
          $title = $stars = '';
          echo "<div><pre style='font-size:30px;line-height: normal;'>User: $user <img src='$userpic' style='width:30px;height:30px;border:1px solid #000000;'>    Rating: ";
         
          for($i = 0;$i<$rating;$i++){
            echo '<span class="fa fa-star checked"></span>';
          }
          $diff = 5-$rating;
          for ($i = 0;$i<$diff; $i++)
          {
              echo '<span class="fa fa-star"></span>';
          }
          echo ("      Created: $date<br>");
          echo ("Review: \n$review<br></pre><hr style='border-top: 1px solid #26272b;'></div>");
        }
        echo '</div';
        }
        ?>
    </section>
    </center>


     <!-- Importing Scripts -->
    <script src="/../plugins/jquery-2.1.1.min.js"></script>
    <script src="/../plugins/bootstrap/bootstrap.min.js"></script>
    <script src="/../plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="/../plugins/magnific-popup/jquery.magnific.popup.min.js"></script>
    <script src="/../js/main.js"></script>
    
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
</body>

</html>