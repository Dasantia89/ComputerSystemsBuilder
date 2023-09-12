<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Computer Systems Builder - My Account</title>
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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
     th,td{
      text-align: center;
      border: 1px solid black;
      padding: 5px;
      }
      button {
        Background-color:#0457c4;
        color:white;
      }
      button:hover {
        text-decoration: none;
        color: black;
      }

      .formsubmit {
        Background-color:#0457c4;
        color:white;
        width:180px; 
        height:30px;
      }

      .formsubmit:hover {
        text-decoration: none;
        color: black;
      }
      .checked {
        color: orange;
      }
      h2 {
        color: blue;
      }

    </style>
     <script src='js/validate.js'></script>
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
                    
                    <span style="color: #0457c4">C</span>omputer <span style="color: #0457c4">S</span>ystems <span style="color: #0457c4">B</span>uilder</h4></a><p id = "greeting"> <h4 style="color:white;"><?php if (isset($_POST['changed']) && ($_POST['changed'] == 'username')) { $new = $_POST['new_username']; echo ("Logged in as $new"); require 'php/SessionControl.php';
                    }else{require 'php/SessionControl.php'; echo $logmsg;}?></h4></p>
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
    <br><br><br><br>
    <?php 
    require_once 'php/query.php';
    

    if((isset($_POST['changed']) && $_POST['changed'] == 'password')){ // New pw has been input by user and will be updated in database
      $oldpw = $_POST['old_pw'];
      $newpw = $_POST['new_pw'];
      $query = ("select user_pw from User where user_name = '$username';");
      $result = sendQuery($query);
      $pw = $result[0]['user_pw'];
      if (password_verify($oldpw, $pw)){ 
        $hashedpw = password_hash($newpw,PASSWORD_DEFAULT);
        $query = ("update User set user_pw = '$hashedpw' where user_name = '$username';");
        sendQuery($query);
      echo '<br><div style="text-align:center";><h1><strong>Password Updated<hr> </strong></h1></div><hr><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
      echo '<script type="text/javascript"> 
            window.setTimeout(function() {
            window.location.href="My_Account.php";
            }, 2500);
            </script>';
      }else{
      echo ("<script type='text/javascript'>alert('Incorrect password.')</script>
      <form id = 'form' method='post' action='My_Account.php' enctype='multipart/form-data' id = 'form'>
      <br>
      <input type='hidden' name = 'change' value='password' >
      </form></div></center>
      <script>document.getElementById('form').submit();</script>");
      } 
    }
    else if((isset($_POST['changed']) && $_POST['changed'] == 'email')){ // New email has been input by user and will be updated in database
      $query = ("select user_email from User where user_name = '$username';");
      $result = sendQuery($query);
      $oldemail = $result[0]['user_email'];
      $newemail = $_POST['new_email'];
      $newemailupper = strtoupper($_POST['new_email']);
      $query = ("update User set user_email = '$newemailupper' where user_email = '$oldemail';");
      $result = sendQuery($query);
       $query = ("update User set user_email_orig_case = '$newemail' where user_email = '$newemailupper';");
      $result = sendQuery($query);

      echo '<br><div style="text-align:center";><h1><strong>Email Updated to:<br><hr> '.$newemail.'</strong></h1></div><hr><br><br><br><br><br><br><br><br><br><br><br><br><br>';
      echo '<script type="text/javascript"> 
            window.setTimeout(function() {
            window.location.href="My_Account.php";
            }, 2500);
      </script>';
    }
    else if((isset($_POST['changed']) && $_POST['changed'] == 'username')){ // New username has been input by user and will be updated in database
      $newuser = $_POST['new_username'];
      $olduser = $username;
      $newuserupper = strtoupper($newuser);
      $_SESSION['username'] = $newuserupper;
      $_SESSION['usernameorig']= $newuser;
      $query = ("select user_pic from User where user_name = '$olduser';");
      $result = sendQuery($query);
      $usrpic = $result[0]['user_pic'];
      if($usrpic != '/users/default.png'){ // if user has custom profile pic, change name to new username
        $type = substr($usrpic,-4);
        $newpath = 'users/'.$newuserupper.$type;
        $query = ("update User set user_pic = '/$newpath' where user_name = '$olduser';");
        sendQuery($query);
        $usrpic2 = substr($usrpic,1);
        rename($usrpic2, $newpath); 
        $suppath = 'support/';
        if(file_exists($suppath.$olduser.'.txt')){ // if user has support ticket, rename it to their new username
          rename ($suppath.$olduser.'.txt',$suppath.$newuserupper.'.txt');
          if(file_exists($suppath.$olduser.'.jpg'))
            rename ($suppath.$olduser.'.jpg',$suppath.$newuserupper.'.jpg');
          else if(file_exists($suppath.$olduser.'.JPG'))
            rename ($suppath.$olduser.'.JPG',$suppath.$newuserupper.'.JPG');  
          else if (file_exists($suppath.$olduser.'.png'))
            rename ($suppath.$olduser.'.png',$suppath.$newuserupper.'.png');  
          else if (file_exists($suppath.$olduser.'.PNG'))
            rename ($suppath.$olduser.'.PNG',$suppath.$newuserupper.'.PNG');
          else if (file_exists($suppath.$olduser.'.gif'))
            rename ($suppath.$olduser.'.gif',$suppath.$newuserupper.'.gif');  
          else if (file_exists($suppath.$olduser.'.GIF'))
            rename ($suppath.$olduser.'.GIF',$suppath.$newuserupper.'.GIF');
        }
               
      }
      $query = ("update User set user_name = '$newuserupper' where user_name = '$olduser';");
      sendQuery($query);
      $query = ("update User set user_name_orig_case = '$newuser' where user_name = '$newuserupper';");
      sendQuery($query);
      echo '<br><div style="text-align:center";><h1><strong>Username Updated to:<br><hr> '.$newuser.'</strong></h1></div><hr><br><br><br><br><br><br><br><br><br><br><br><br><br>';
      echo '<script type="text/javascript"> 
            window.setTimeout(function() {
            window.location.href="My_Account.php";
            }, 2500);
</script>';
    }
    else if((isset($_POST['changed']) && $_POST['changed'] == 'address')){ // New address has been input by user and will be updated in database
      $street = $_POST['new_street'];
      $city = $_POST['new_city'];
      $state = $_POST['new_state'];
      $zip = $_POST['new_zip']; 

      $query = 'select address_id from Address order by address_id desc limit 1;';
      $result = sendQuery($query);
      $id = ($result[0]['address_id'])+1;
      $query = ("insert into Address (address_street,address_city,address_state,address_zip,address_id) values ('$street','$city','$state','$zip',$id);");
      sendQuery($query);
      $query = ("update User set address_id = $id where user_name = '$username';");
      sendQuery($query);
      echo '<br><div style="text-align:center";><h1><strong>Address Updated to:<br>'.$street.' '.$city.' '.$state.', '.$zip.' </strong></h1></div><hr>';
      echo '<script type="text/javascript"> 
            window.setTimeout(function() {
            window.location.href="My_Account.php";
            }, 2500);
</script>';
    }
    else if ((isset($_POST['change']) && $_POST['change'] == 'address')){ // change address
      $query = 'select address_id from User where user_name = "'.$username.'";'; 
      $results = sendQuery($query);
      $query = 'select * from Address where address_id = "'.$results[0]['address_id'].'";';
      $results = sendQuery($query);
      echo '<br><div style="text-align:center";><h1><strong>Change Address</strong></h1></div><hr>';
      echo ("<div style='text-align:center';><pre><form action='My_Account.php' method='post' ><input type='hidden' name='changed' value='address'><strong><h3>New Street:</strong></h3><input style = 'width:180px; height=30px;' type = 'text' name = 'new_street' required><hr><h3>New City:</strong></h3><input style = 'width:180px; height=30px;' type = 'text' name = 'new_city' required><hr><h3>New State:</strong></h3><input style = 'width:180px; height=30px;' type = 'text' name = 'new_state' maxlength='2' minlength='2' required><hr><h3>New Zip Code:</strong></h3><input style = 'width:180px; height=30px;' type = 'text' name = 'new_zip' minlength='5' maxlength='5' required><hr>
<input style = 'width:180px; height=30px;' type='submit' value='Submit change' ></form><hr><form id = 'form' method='post' action='My_Account.php' enctype='multipart/form-data' id = 'form'><input type='hidden' name = 'choice' value='profile'><input style = 'width:180px; height=30px;' type='submit' value='Cancel'>
      </form></div></pre></div><hr><br><br><br><br><br><br><br>
      ");
    }
    else if (isset($_POST['change']) && $_POST['change'] == 'password'){ // change password
        echo '<br><div style="text-align:center";><h1><strong>Change Password</strong></h1></div><hr>';
        echo ("<div style='text-align:center';><pre><form action='My_Account.php' method='post' enctype='multipart/form-data' onsubmit='return validatepw(this)'><input type='hidden' name='changed' value='password'><strong><h3>Old Password:</strong></h3><input style = 'width:180px; height=30px;' type = 'password' name = 'old_pw' required><hr><strong><h3>New Password:</strong></h3><input style = 'width:180px; height=30px;' type='password' name='new_pw' required><hr><strong><h3>Confirm:</strong></h3><input style = 'width:180px; height=30px;' type='password' name='confirm' required><hr>
<input style = 'width:180px; height=30px;' type='submit' value='Submit change' ></form><hr><form id = 'form' method='post' action='My_Account.php' enctype='multipart/form-data' id = 'form'><input type='hidden' name = 'choice' value='profile'><input style = 'width:180px; height=30px;' type='submit' value='Cancel'>
      </form></div>
    </pre></div><hr><br><br><br><br><br><br><br>
      ");
    }
    else if (isset($_POST['change']) && $_POST['change'] == 'email'){ // change email
        $email = $_POST['email'];
        $emailorig = $_POST['emailorig']; 
        echo '<br><div style="text-align:center";><h1><strong>Change Email</strong></h1></div><hr><br>';
        echo ("<div style='text-align:center';><pre><h3><strong>Old Email: $emailorig</strong></h3><hr><form action='My_Account.php' method='post' onsubmit='return validateemail(this)'><input type='hidden' name='changed' value='email'><strong><h3>New Email:</strong></h3><input style = 'width:180px; height=30px;' type = 'text' name = 'new_email' required><br>
<input style = 'width:180px; height=30px;' type='submit' value='Submit change' ></form><hr><form id = 'form' method='post' action='My_Account.php' enctype='multipart/form-data' id = 'form'><input type='hidden' name = 'choice' value='profile'><input style = 'width:180px; height=30px;' type='submit' value='Cancel'>
      </form></div></pre></div><hr><br><br><br><br><br><br><br>
      ");
    }
    else if (isset($_POST['change']) && $_POST['change'] == 'username'){ // change username
         echo '<br><div style="text-align:center";><h1><strong>Change Username</strong></h1></div><hr><br>';
        echo ("<div style='text-align:center';><pre><h3><strong>Old Username: $usernameorig</strong></h3><hr><form action='My_Account.php' method='post' onsubmit='return validateusername(this)'><input type='hidden' name='changed' value='username'><strong><h3>New username:</strong></h3><input style = 'width:180px; height=30px;' type = 'text' name = 'new_username' required><br>
<input style = 'width:180px; height=30px;' type='submit' value='Submit change' ></form><hr><form id = 'form' method='post' action='My_Account.php' enctype='multipart/form-data' id = 'form'><input type='hidden' name = 'choice' value='profile'><input style = 'width:180px; height=30px;' type='submit' value='Cancel'>
      </form></div></pre></div><hr><br><br><br><br><br><br><br>
      ");
    }
    else if(isset($_POST['order'])){ // user chose to view orders, and then chose a specific order
      $order = $_POST['order'];
      $query = ("select * from `Order` o join Order_Item oi on o.order_id = oi.order_id join Prebuilt p on oi.prebuilt_id = p.prebuilt_id where o.order_id = '$order'");
      $result = sendQuery($query);
      $date = substr($result[0]['order_date'],0,10); 
      echo '<center><div><table   style= "width:50%; border-spacing: 5px; padding: 30px; border-collapse:separate; "><tr><th colspan="3"><h1><strong>Order # '.$order.'</strong></h1></th></tr><tr><td colspan = "3"><h3><strong>Order Date: '.$date.'</strong></h3></td>';
      $subtotal = null;
      foreach($result as $row){  // iterate through order items and display info in html table
        $image = $row['prebuilt_image'];
        $quantity = $row['order_it_quantity'];
        $price = (float) $row['prebuilt_price'];
        $name = $row['prebuilt_name'];
        $subtotal += ($quantity*$price);
        $price = number_format($price,2);
       echo ("<tr><td rowspan='2'><img src='$image' style='width:80px;height:80px;'></td><td colspan='2'><h6><strong>$name</strong></h6></td></tr><tr><td><h6><strong>Quantity: x$quantity</h6></strong></td><td><h6><strong>Price: $$price</h6></strong></td></tr>");
      }
      $subtotal = number_format($subtotal,2);
      $total = number_format($result[0]['order_total'],2);
      $tax = number_format($result[0]['order_tax'],2);
      $ship = number_format($result[0]['order_shipping'],2);
      $date = $result[0]['order_date'];
      echo ("<tr><td colspan = '3'><h6><strong>Subtotal: $$subtotal</h6></strong></td></tr>");
      echo ("<tr><td colspan = '3'><h6><strong>Tax: $$tax</h6></strong></td></tr>");
      echo ("<tr><td colspan = '3'><h6><strong>Shipping: $$ship</h6></strong></td></tr>");
      echo ("<tr><td colspan = '3'><h6><strong>Total: $$total</h6></strong></td></tr></table>");
      echo ("<hr><form id = 'form' method='post' action='My_Account.php' enctype='multipart/form-data' id = 'form'><input type='hidden' name = 'choice' value='orders'><input style = 'width:180px; height=30px;' type='submit' value='Back'>
      </form></div></div></center>");
    }
    else if (isset($_POST['choice']) && $_POST['choice'] == 'orders'){ // My Orders
      echo '<br><br><div style="text-align:center";><h1><strong>My Orders</strong></h1></div><hr><br>';
      $query = 'select o.order_id from User u join `Order` o on u.user_name = o.user_name where u.user_name = "'.$username.'";'; 
      $results = sendQuery($query);
      if (!$results) echo '<div style="text-align:center";><h3><strong>You have no orders.</strong></h3></div><br>';
      foreach($results as $order){ // iterate through orders and make a form for each 
        $currentorder  = $order['order_id'];  
        echo ("<div style='text-align:center'><pre><h1><strong>$currentorder</strong></h1><form action='My_Account.php' method='post'><input type='hidden' name='order' value='$currentorder'><input style = 'width:180px; height=30px;' type='submit' value='View this order' ></form></pre></div><hr>
      ");
      }
      echo ("<div style='padding-top:60px;padding-bottom:60px;text-align:center;'><form id = 'form' method='post' action='My_Account.php' enctype='multipart/form-data' id = 'form'><input style = 'width:180px; height=30px;' type='submit' value='Back'>
      </form></div><hr>");

    }else if(isset($_POST['change']) && $_POST['change'] == 'picture') { // Change user picture
      if ($_FILES['filename']['error']!=0){ // no file uploaded
        echo "<script type='text/javascript'>alert('No file has been uploaded.');</script>";
        echo ("<form id = 'pic1' action='My_Account.php' method='post'>
            <input type='hidden' name='choice' value='profile'>
            <script>document.getElementById('pic1').submit();</script>
            </form>
      ");
      }
      else if (!empty ($_FILES)){ // a file was uploaded
        $name = $_FILES['filename']['name'];
        
        if($_FILES['filename']['error'] == 0 && !(strpos($name, 'jpg') || strpos($name, 'gif') || strpos($name, 'png') || strpos($name, 'JPG') || strpos($name, 'GIF') || strpos($name, 'PNG'))){ // user uploaded an invalid file.
	        echo ("<script type='text/javascript'>alert('$name is not an accepted image file.'); </script>"); 
          echo ("<form id = 'pic2' action='My_Account.php' method='post'>
            <input type='hidden' name='choice' value='profile'>
            <script>document.getElementById('pic2').submit();</script>
            </form>
          ");

        }else if ((strpos($name, ".jpg") || strpos($name, ".gif") || strpos($name, ".png") || strpos($name, '.JPG') || strpos($name, '.GIF') || strpos($name, '.PNG'))){ //user uploaded a valid image
        $type = substr($name, -4);
        $path = "users/".$username.$type;
        move_uploaded_file($_FILES['filename']['tmp_name'], $path); // move image from temp location to users folder 
        $query = ("update User set user_pic = '/$path' where user_name = '$username';");
        sendQuery($query);
        echo "<script type='text/javascript'>alert('Profile picture updated.')</script>";
        echo ("<form id = 'pic2' action='My_Account.php' method='post'>
            <input type='hidden' name='choice' value='profile'>
            <script>document.getElementById('pic2').submit();</script>
            </form>
        ");
        } 
      }
    }else if (isset($_POST['choice']) && $_POST['choice'] == 'profile'){ // My Profile
      echo '<br><br><div style="text-align:center";><h1><strong>My Profile</strong></h1></div><hr>';
      $query = 'select address_id from User where user_name = "'.$username.'";'; 
      $results = sendQuery($query);
      $query = 'select * from User u join Address a on a.address_id = u.address_id where u.address_id = "'.$results[0]['address_id'].'" AND u.user_name = "'.$username.'";';
      $results = sendQuery($query);
      $email = $results[0]['user_email'];
      $emailorig = $results[0]['user_email_orig_case'];
      $userpic = $results[0]['user_pic'];
      $address = $results[0]['address_street'] . ' ' . $results[0]['address_city'] . ' ' . $results[0]['address_state'] . ', ' . $results[0]['address_zip'];
      if($address == 'no no no, no'){
        $address = 'You have not yet added an address.';
      }
      echo ("<div style='text-align:center';><pre><h3><strong>Username: $usernameorig</strong></h3><form action='My_Account.php' method='post'><input type='hidden' name='change' value='username'><input style = 'width:180px; height=30px;' type='submit' value='Change your username' ></form></pre></div><hr>
      ");
       echo ("<div style='text-align:center';><pre><h3><strong>Email: $emailorig</strong></h3><form action='My_Account.php' method='post'><input type='hidden' name='change' value='email'><input type='hidden' name='email' value='$email'><input type='hidden' name='emailorig' value='$emailorig'><input style = 'width:180px; height=30px;' type='submit' value='Change your email address' ></form></pre></div><hr>
      ");
      echo ("<div style='text-align:center';><pre><h3><strong>Password</strong></h3><form action='My_Account.php' method='post'><input type='hidden' name='change' value='password'><input style = 'width:180px; height=30px;' type='submit' value='Change your password' ></form></pre></div><hr>
      ");
      echo ("<div style='text-align:center';><pre><h3><strong>Current Address: $address</strong></h1><form action='My_Account.php' method='post'><input type='hidden' name='change' value='address'><input style = 'width:180px; height=30px;' type='submit' value='Change your address' ></form></h3></pre></div><hr>"
      );
      echo ("<div style='text-align:center';><pre><img src='$userpic' style='height:100px;width:100px;border:3px solid #000000;'> <strong><form action='My_Account.php' method='post' enctype='multipart/form-data'><h3>Change your profile picture (JPG, GIF, or PNG File)</h3>
<input type='file' name='filename' id='filename'><br><input type='hidden' name='change' value='picture'>
<input style = 'width:180px; height=30px;' type='submit' value='Update profile picture' ></form></pre></div><hr>"
);
      echo ("<div style='text-align:center';><pre><form id = 'form' method='post' action='My_Account.php' enctype='multipart/form-data' id = 'form'><br><input style = 'width:180px; height=30px;' type='submit' value='Back'>
      </form></center></pre></div>");
      
    }
    else if (isset($_POST['choice']) && $_POST['choice'] == 'support'){// My Support
      echo '<br><br><div style="text-align:center";><h1><strong>My Support Ticket</strong></h1><hr>';
      if(file_exists('support/'.$username.'.txt')){
        $file = fopen('support/'.$username.'.txt', "r");
        //Output a line of the file until the end is reached
        $line = array();
        while(!feof($file))
        {
          array_push($line, fgets($file));
        }
        fclose($file);
        echo ("<div style='text-align:center;'>");
        if ($loggedin){
         echo ("<h2><strong>Username</h2></strong><br><h5>$line[0]</h5><hr>");
        }
        echo ("<h2><strong>Email Address</h2></strong><br><h5>$line[1]</h5><hr><h2><strong>Name</h2></strong><br><h5>$line[2] $line[3]</h5><hr><h2><strong>Reason For Ticket</h2></strong><br><h5>$line[4]</h5><hr><h2><strong>Extra Information</h2></strong><br><h5>$line[5]</h5><hr><h2><strong>Picture</h2></strong><br><h5><img src='$line[6]' alt='No Picture Uploaded'></h5><hr><h2><strong>Ticket Status</h2></strong><br><h5>$line[7]</h5>");
       
        
      }else{
        echo ("<h2><strong>You have no support ticket.</h2></strong>");
      }
      echo ("<hr><form id = 'form' method='post' action='My_Account.php' enctype='multipart/form-data' id = 'form'><input style = 'width:180px; height=30px;' type='submit' value='Back'>
        </form></div><br>");
    }
    else if (isset($_POST['choice']) && $_POST['choice'] == 'reviews'){// My Reviews
      echo '<br><br><div style="text-align:center";><h1><strong>My Reviews</strong></h1><hr>';
      $query = ("Select * from User_Rating ur JOIN Prebuilt p ON ur.prebuilt_id = p.prebuilt_id where ur.user_name = '$username';");
      $result = sendQuery($query);
      foreach ($result as $row){
        $pic = $row['prebuilt_image'];
        $name = $row['prebuilt_name'];
        $rating = $row['user_rating'];
        $date = substr($row['user_rating_date'],0,10);
        $review = $row['user_review'];
        echo '<center><div><table   style= "width:50%; border-spacing: 5px; padding: 30px; border-collapse:separate; "><tr><th>Product</th><th>Rating</th><th>Review</th><th>Date</th></tr>';
        echo ("<tr><td><img src = '$pic' style='width:50px;height:50px;'></td><td>");
        for($i=0;$i<$rating;$i++){
           echo '<span class="fa fa-star checked"></span>';
        }
        for($i=0;$i<(5-$rating);$i++){
           echo '<span class="fa fa-star"></span>';
        }
        echo ("</td><td>$review</td><td>$date</td></tr>");
      }
      echo '</table></div></center>';
      echo ("<hr><form id = 'form'  method='post' action='My_Account.php' enctype='multipart/form-data' id = 'form'><input style = 'margin-bottom:105px;width:180px; height=30px;' type='submit' value='Back'>
      </form></div><br>");
    }
    else{// This loads the first time the user click My Account
    echo "<br><div style='text-align:center;Background-color:#0457c4;
        color:white;border-top:8px solid black; '><h1><strong>My Account</strong></h1></div>";
    echo " <div style='border:4px solid black;'><button style='width:100%;height:100px;border:4px solid black;' onclick='window.location.href = \"Logout.php\"'>Logout</button>";
    
    //output main menu forms
    echo ("<form action='My_Account.php' method='post'>
            <input type='hidden' name='choice' value='orders'>
            <input class='formsubmit' type='submit' value='My Orders' style='width:100%;height:100px;border:4px solid black;'></form>
      ");
    echo ("<form action='My_Account.php' method='post'>
            <input type='hidden' name='choice' value='profile'>
            <input class='formsubmit' type='submit' value='My Profile' style='width:100%;height:100px;border:4px solid black;'></form>
      ");
    
    echo ("<form action='My_Account.php' method='post'> 
            <input type='hidden' name='choice' value='support'>
            <input class='formsubmit' type='submit' value='My Support Ticket' style='width:100%;height:100px;border:4px solid black;'></form>
      ");

    echo ("<form action='My_Account.php' method='post'>
            <input type='hidden' name='choice' value='reviews'>
            <input class='formsubmit' type='submit' value='My Reviews' style='width:100%;height:100px;border:4px solid black;'></form></div>
      ");
    }
    ?>

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

     <!-- whenever you want to query include this file --> 
    <script>
    //function that calls JSQuery, receives query results, converts to object, and displays results
    /*
    function getQueryResults(query){ 
      var obj = JSON.parse(JSQuery(query));
      for(var i=0; i<obj.length;i++){
        document.getElementById("demo").innerHTML += obj[i].user_email + ' ' + obj[i].user_name + ' ' + obj[i].user_first + ' ' + obj[i].user_last + '<br>';
        }
      }*/
     </script>
     <!--
    <div style='text-align: center'>
    <button onclick="getQueryResults('select * from User;')">TEST</button>
    <p id="demo"></p>
    </div>
    -->

    
  </body> 

</html>