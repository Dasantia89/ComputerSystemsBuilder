<html class="no-js">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Computer Systems Builder - Order Confirmation</title>
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

                    <span style="color: #0457c4">C</span>omputer <span style="color: #0457c4">S</span>ystems <span style="color: #0457c4">B</span>uilder</h4></a><h4 style="color:white;"><?php require 'php/SessionControl.php'; echo $logmsg;?></h4>
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
      <!-- Importing Scripts -->
      <script src="plugins/jquery-2.1.1.min.js"></script>
      <script src="plugins/bootstrap/bootstrap.min.js"></script>
      <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
      <script src="plugins/magnific-popup/jquery.magnific.popup.min.js"></script>
      <script src="js/main.js"></script>

      <?php
$pp_hostname = "www.sandbox.paypal.com";
require_once 'php/query.php';


$req = 'cmd=_notify-synch';

$tx_token   = $_GET['tx'];
$auth_token = "1BHwur1qSH49I22iz6phWocZkI96BIlhqs3Cbq3kwjCYz8XAhCCLPQ8IdPC";
$req .= "&tx=$tx_token&at=$auth_token";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://$pp_hostname/cgi-bin/webscr");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Host: $pp_hostname"));
$res = curl_exec($ch);
curl_close($ch);

if (!$res) {
    //HTTP ERROR
} else {
    // parse the data
    $lines    = explode("\n", trim($res));
    $keyarray = array();
    if (strcmp($lines[0], "SUCCESS") == 0) {
        for ($i = 1; $i < count($lines); $i++) {
            $temp                          = explode("=", $lines[$i], 2);
            $keyarray[urldecode($temp[0])] = urldecode($temp[1]);
        }
        echo '<br><br><br><br><br>';
        //var_dump($keyarray);
        $street = $keyarray['address_street'];
        $city   = $keyarray['address_city'];
        $state = $keyarray['address_state'];
        $zip = $keyarray['address_zip'];
        $firstname = $keyarray['first_name'];
        $lastname  = $keyarray['last_name'];
        $itemname  = $keyarray['item_name1'];
        $amount    = $keyarray['payment_gross'];
        $quantity  = $keyarray['quantity1'];
        $email     = $keyarray['payer_email'];

        // address query
        
        // check if address exists
        $query = 'select address_id FROM Address where address_street = "'.$street.'" AND address_zip = "'.$zip.'"AND address_city = "'.$city.'" AND address_state = "'.$state.'";';
        $result = sendQuery($query);
        if($result){//if address exists use existing address id
                $address_id = $result[0]['address_id'];
        }else{
                //if address doesn't exist then select the last order id created and increment it by 1
                $result = sendQuery('select address_id from Address order by address_id desc limit 1;');
                $address_id = $result[0]['address_id'];
                $address_id += 1;
                $query = 'insert into Address (address_id,address_street,address_zip,address_city,address_state) values('.$address_id.',"'.$street.'","'.$zip.'","'.$city.'","'.$state.'");';
                $result = sendQuery($query);
        }

        // update address_id for current user

        if(!$loggedin) // if checked in as guest, use payal 'payer_id' as user_name and add a user
        {
          $password = password_hash('guest',PASSWORD_DEFAULT);
          $username = $keyarray['payer_id'];
          $query2 = 'insert into User (user_name, user_email, user_pw,user_first,user_last,address_id, is_guest, user_pic) values("'.$username.'","'.$email.'","'.$password.'","'.$firstname.'","'.$lastname.'","'.$address_id.'",1,"/users/default.png");';
          sendQuery($query2);
         }else{
                $query2 = 'update User set address_id = "'.$address_id.'" where user_name = "'.$username.'";';
                sendQuery($query2);
        }

        $orderid = $keyarray['txn_id'];
        $total =  (double)($keyarray['payment_gross']);
        $tax =  (double)($keyarray['tax']);
        $shipping  = (double)($keyarray['mc_shipping']);
        // Add order info to db
        $query3 = 'insert into `Order` (order_id,order_status,order_total,order_date,user_name,order_tax,order_shipping) values("'.$orderid.'","received",'.$total.',CURRENT_DATE(),"'.$username.'",'.$tax.','.$shipping.');';
        sendQuery($query3);

        //orderitem query

        $items = $keyarray['num_cart_items'];
        for($i = 0; $i<=$items;$i++){
          $orderitemnum[$i] = (int)($keyarray['item_number'.($i+1)]);
          $orderitemquntity[$i] = (int)($keyarray['quantity'.($i+1)]);
          $orderitemtotal += $orderitemquntity[$i];
          $query = 'insert into Order_Item (prebuilt_id,order_id,order_it_quantity) values('.$orderitemnum[$i].',"'.$orderid.'",'.$orderitemquntity[$i].');';
          sendQuery($query);
        }


        //prints out a confirmation message
        echo ("<div style='text-align:center;' class='heading'> <h1><strong>Thank you for your purchase!</strong></h1> </div>");
        echo ("<div style='text-align:center;'> <h2><strong>Payment Details</strong></h2><br>\n");
        echo ("<h3>Name: $firstname $lastname</h3>\n");
        echo ("<h3>Address: $street $city $state, $zip<h3>\n");
        echo ("<h3>Items Purchased: $orderitemtotal<h3>\n");
        echo ("<h3>Total: $$amount</h3>\n");
        echo ("<h3>A confirmation email will be sent to $email</h3></div>\n");
        echo ("");
    } else if (strcmp($lines[0], "FAIL") == 0) {

    }
}
?>

<br><br><br><br>
<div style="text-align:center;"><p><h4> Your transaction has been completed, and a receipt
for your purchase will be emailed to you.<br><br> You may log into your account at <a href='https://www.paypal.com'>www.paypal.com</a> to view details of this transaction.</h4></p></div><br><br>

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
</html>