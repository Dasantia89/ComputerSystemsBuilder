<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Computer Systems Builder - Configure</title>
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
  
  <body id="body" >
 
    
    <!-- Navigation bar -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
              
              <!-- The company name that is seen on the top of the page -->
                <a class="logotext" href="index.php">

                  <h4 class="font-weight-bold mb-4 font-size-40" style = "color:white;">

                    <img src="images/Logowhitepic.png" alt="Logo" style="max-width: 12%;" class="logo">
                    
                    <span style="color: #0457c4">C</span>omputer <span style="color: #0457c4">S</span>ystems <span style="color: #0457c4">B</span>uilder</h4></a><h4 style="color:white;">
                    <?php require 'php/SessionControlConf.php'; echo $logmsg;?></h4>
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
    <br><br>
   
      <!-- Page Content -->
      <br><br><br><br>
      <?php
        require_once 'php/query.php';
        $prodFilters="Product Filters";

        echo ("
        <div class='container'>
          <div class='configureContainer' style='float:left; display: inline-block; margin-right:5px;'>
          <form action='Configure_Sys.php' method='post' name='gpuform'>
            <input type='hidden' name='choice' value='gpu'>
             <input  id = 'choicegpu' type='submit' value='GPU' style='width:100%;height:100%;'></form>
        </div>
        <div class='configureContainer' style='float:left; display: inline-block;margin-right:5px;'>
          <form action='Configure_Sys.php' method='post'>
            <input type='hidden' name='choice' value='cpu'>
             <input  type='submit' value='CPU' style='width:100%;height:100%;'></form>
        </div>
        <div class='configureContainer' style='float:left; display: inline-block;margin-right:5px;'>
          <form action='Configure_Sys.php' method='post'>
            <input type='hidden' name='choice' value='storage'>
             <input  type='submit' value='Storage' style='width:100%;height:100%;'></form>
        </div>
        <div class='configureContainer' style='float:left; display: inline-block;margin-right:5px;'>
          <form action='Configure_Sys.php' method='post'>
            <input type='hidden' name='choice' value='cases'>
             <input  type='submit' value='Case' style='width:100%;height:100%;'></form>
        </div>
         <div class='configureContainer' style='float:left; display: inline-block;margin-right:5px;'>
          <form action='Configure_Sys.php' method='post'>
            <input type='hidden' name='choice' value='mobo'>
             <input  type='submit' value='Motherboard' style='width:100%;height:100%;'></form>
        </div>
        <div class='configureContainer' style='float:left; display: inline-block;margin-right:5px;'>
          <form action='Configure_Sys.php' method='post'>
            <input type='hidden' name='choice' value='memory'>
            <input  type='submit' value='Memory' style='width:100%;height:100%;'></form>
        </div>
        <div class='configureContainer' style='float:left; display: inline-block;margin-right:5px;'>
          <form action='Configure_Sys.php' method='post'>
            <input type='hidden' name='choice' value='psu'>
            <input  type='submit' value='Power Supply' style='width:100%;height:100%;'></form>
        </div>

        <div class='configureContainer' style='float:left; display: inline-block;margin-right:5px; position:absolute;'>
          <form action='Configure_Sys.php' method='post'>
            <input type='hidden' name='choice' value='all'>
            <input  type='submit' value='Select All' style='width:100%;height:100%;'></form>
        </div>
        
        </div>
        ");
                        if(isset($_POST['choice']) && $_POST['choice'] == 'all'){
                          $_SESSION['choice'] = 'all';
                          $prodFilters="";
                        }
                        if(!(isset($_POST['choice']))){
                          $_SESSION['choice'] = 'all';
                          $prodFilters="";
                        }                   
        echo ('
        <div class="container clear" style="width:100%;padding-top:20px;" id="main">
            <div class="row">
                <br> 
                  <div class="col-md-3">
                          <h2 style = "float-align="left" style="white-space: nowrap">' . $prodFilters . '</h2>  
                               '); 

                              if(isset($_POST['choice']) && $_POST['choice'] == 'gpu'){
      
                              #GPU-Filters
                              $_SESSION['choice'] = 'gpu';
                              echo '<br><div class="list-group">
                              <h3>GPUBrand</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT gpu_brand FROM GPU_List where gpu_brand != '' ORDER BY gpu_id DESC;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "brand" type="checkbox" class="common_selector gpu" name="results" value="'.$row['gpu_brand'].'"><label for="results">'.$row['gpu_brand'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';      
                              echo '</div>';

                              echo '<br><div class="list-group">
                              <h3>GPUMemory</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT gpu_memory FROM GPU_List where gpu_memory != '' ORDER BY gpu_memory ASC;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "memory" type="checkbox" class="common_selector gpu" name="results" value="'.$row['gpu_memory'].'"><label for="results">'.$row['gpu_memory'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';      
                              echo '</div>';
                              #End of GPU-Filters

                              }else if(isset($_POST['choice']) && $_POST['choice'] == 'storage'){
                              $_SESSION['choice'] = 'storage';
                              #Start of Storage-Filters
                              echo '<br><div class="list-group">
                              <h3>StorageBrand</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT storage_brand FROM STORAGE_List where storage_brand != '' ORDER BY storage_id DESC;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "brand" type="checkbox" class="common_selector storage" name="results" value="'.$row['storage_brand'].'"><label for="results">'.$row['storage_brand'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';      
                              echo '</div>';

                              echo '<br><div class="list-group">
                              <h3>StorageCapacity</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT storage_capacity FROM STORAGE_List where storage_capacity != '' ORDER BY storage_capacity ASC;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "storageCapacity" type="checkbox" class="common_selector storage" name="results" value="'.$row['storage_capacity'].'"><label for="results">'.$row['storage_capacity'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';      
                              echo '</div>';

                              echo '<br><div class="list-group">
                              <h3>StorageType</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT storage_type FROM STORAGE_List where storage_type != '' ORDER BY storage_id DESC;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "storageType" type="checkbox" class="common_selector storage" name="results" value="'.$row['storage_type'].'"><label for="results">'.$row['storage_type'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';      
                              echo '</div>';     
                             
                            }
                            else if(isset($_POST['choice']) && $_POST['choice'] == 'cpu'){
                              $_SESSION['choice'] = 'cpu';
                              #start of CPU-Filters
                              echo '<br><div class="list-group">
                              <h3>CPU Brand</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT cpu_brand FROM CPU_List where cpu_brand != '' ORDER BY cpu_id asc;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "cpubrand" type="checkbox" class="common_selector cpu" name="results" value="'.$row['cpu_brand'].'"><label for="results">'.$row['cpu_brand'].'</label></pre>';
                                     
                                      }
                                      echo '</div>';

                                    
                              echo '</div>';
                               echo '<br><div class="list-group">
                              <h3>CPU Cores and Threads</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT cpu_cores_threads FROM CPU_List where cpu_cores_threads != '' ORDER BY cpu_id asc;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "cores" type="checkbox" class="common_selector cpu" name="results" value="'.$row['cpu_cores_threads'].'"><label for="results">'.$row['cpu_cores_threads'].'</label></pre>';
                                   
                                      }
                                      echo '</div>';

                                    
                              echo '</div>';
                              echo '<br><div class="list-group">
                              <h3>CPU Integrated Graphics</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT cpu_integrated_graphics FROM CPU_List where cpu_integrated_graphics != '' ORDER BY cpu_id asc;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "integrated" type="checkbox" class="common_selector cpu" name="results" value="'.$row['cpu_integrated_graphics'].'"><label for="results">'.$row['cpu_integrated_graphics'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';

                                    
                              echo '</div>';
                              echo '<br><div class="list-group">
                              <h3>CPU Total Drawn Power</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT cpu_tdp FROM CPU_List where cpu_tdp != '' ORDER BY cpu_id asc;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "tdp" type="checkbox" class="common_selector cpu" name="results" value="'.$row['cpu_tdp'].'"><label for="results">'.$row['cpu_tdp'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';

                                    
                              echo '</div>';
                              #end of cpu filters
                            }
                            else if(isset($_POST['choice']) && $_POST['choice'] == 'memory'){
                              $_SESSION['choice'] = 'memory';
                              #start of MEMORY filters
                              echo '<br><div class="list-group">
                              <h3>MEMORY Brands</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT memory_brand FROM MEMORY_List where memory_brand != '' ORDER BY memory_id asc;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id ="brand" type="checkbox" class="common_selector memory" name="results" value="'.$row['memory_brand'].'"><label for="results">'.$row['memory_brand'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';

                                    
                              echo '</div>';
                              echo '<br><div class="list-group">
                              <h3>MEMORY Speed</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT memory_speed FROM MEMORY_List where memory_speed != '' ORDER BY memory_id asc;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "speed" type="checkbox" class="common_selector memory" name="results" value="'.$row['memory_speed'].'"><label for="results">'.$row['memory_speed'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';

                                    
                              echo '</div>';
                              echo '<br><div class="list-group">
                              <h3>MEMORY Size</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT memory_size FROM MEMORY_List where memory_size != '' ORDER BY memory_id asc;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "memorySize" type="checkbox" class="common_selector memory" name="results" value="'.$row['memory_size'].'"><label for="results">'.$row['memory_size'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';

                                    
                              echo '</div>';
                              echo '<br><div class="list-group">
                              <h3>MEMORY rgb</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT memory_rgb FROM MEMORY_List where memory_rgb != '' ORDER BY memory_id asc;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "rgb" type="checkbox" class="common_selector memory" name="results" value="'.$row['memory_rgb'].'"><label for="results">'.$row['memory_rgb'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';
                              echo '</div>';
                              # Memory end
                            }
                            else if(isset($_POST['choice']) && $_POST['choice'] == 'mobo'){
                              # MOBO BEGIN
                              $_SESSION['choice'] = 'mobo';
                              echo '<br><div class="list-group">
                              <h3>MOBO Manufacturer</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT mobo_manufacturer FROM MOBO_List where mobo_manufacturer != '' ORDER BY mobo_id asc;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "manufacturer" type="checkbox" class="common_selector mobo" name="results" value="'.$row['mobo_manufacturer'].'"><label for="results">'.$row['mobo_manufacturer'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';

                                    
                              echo '</div>';
                               echo '<br><div class="list-group">
                              <h3>MOBO Chipset</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT mobo_chipset FROM MOBO_List where mobo_chipset != '' ORDER BY mobo_id asc;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "chipset" type="checkbox" class="common_selector mobo" name="results" value="'.$row['mobo_chipset'].'"><label for="results">'.$row['mobo_chipset'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';

                                    
                              echo '</div>';
                               echo '<br><div class="list-group">
                              <h3>MOBO Form Factor</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT mobo_form_factor FROM MOBO_List where mobo_form_factor != '' ORDER BY mobo_id asc;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "formFactor" type="checkbox" class="common_selector mobo" name="results" value="'.$row['mobo_form_factor'].'"><label for="results">'.$row['mobo_form_factor'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';

                                    
                              echo '</div>';
                               echo '<br><div class="list-group">
                              <h3>MOBO Socket</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT mobo_socket FROM MOBO_List where mobo_socket != '' ORDER BY mobo_id asc;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "socket" type="checkbox" class="common_selector mobo" name="results" value="'.$row['mobo_socket'].'"><label for="results">'.$row['mobo_socket'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';

                                    
                              echo '</div>';
                               
                            }
                            else if(isset($_POST['choice']) && $_POST['choice'] == 'cases'){
                              #case begin
                              $_SESSION['choice'] = 'cases';
                              echo '<br><div class="list-group">
                              <h3>CASE Manufacturer</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT case_manufacturer FROM CASE_List where case_manufacturer != '' ORDER BY case_id asc;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "caseManufacturer" type="checkbox" class="common_selector cases" name="results" value="'.$row['case_manufacturer'].'"><label for="results">'.$row['case_manufacturer'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';

                                    
                              echo '</div>';
                               echo '<br><div class="list-group">
                              <h3>CASE Form Factor</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT case_form_factor FROM CASE_List where case_form_factor != '' ORDER BY case_id asc;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "caseFormFactor" type="checkbox" class="common_selector cases" name="results" value="'.$row['case_form_factor'].'"><label for="results">'.$row['case_form_factor'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';

                                    
                              echo '</div>';
                               echo '<br><div class="list-group">
                              <h3>CASE Color</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT case_color FROM CASE_List where case_color != '' ORDER BY case_id asc;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "caseColor" type="checkbox" class="common_selector cases" name="results" value="'.$row['case_color'].'"><label for="results">'.$row['case_color'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';
                            echo '</div>';
                            }
                            else if(isset($_POST['choice']) && $_POST['choice'] == 'psu'){
                              #PSU begin
                              $_SESSION['choice'] = 'psu';
                                echo '<br><div class="list-group">
                              <h3>PSU Brand</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT psu_brand FROM PSU_List where psu_brand != '' ORDER BY psu_id asc;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "psubrand" type="checkbox" class="common_selector psu" name="results" value="'.$row['psu_brand'].'"><label for="results">'.$row['psu_brand'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';

                                    
                              echo '</div>';
                              echo '<br><div class="list-group">
                              <h3>PSU Watts</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT psu_watts FROM PSU_List where psu_watts != '' ORDER BY psu_id asc;";
                                      $result = sendQuery($query);
                      
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "watts" type="checkbox" class="common_selector psu" name="results" value="'.$row['psu_watts'].'"><label for="results">'.$row['psu_watts'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';

                                    
                              echo '</div>';
                              echo '<br><div class="list-group">
                              <h3>PSU Rating</h3>
                                      <div class="container" style="width: 200px; height:200px; overflow-y: auto;"> ';
                                      
                                    $query = "SELECT DISTINCT psu_rating FROM PSU_List where psu_rating != '' ORDER BY psu_id asc;";
                                      $result = sendQuery($query);
                                      foreach($result as $row)
                                      {
                                      echo '<pre><input id = "rating" type="checkbox" class="common_selector psu" name="results" value="'.$row['psu_rating'].'"><label for="results">'.$row['psu_rating'].'</label></pre>';
                                    
                                      }
                                      echo '</div>';

                                    
                           
                      echo '</div>';
                            }
                              # psu end
                   echo '</div>';
	               echo '</div>'; 
                           
	                        echo '<div class="row filter_data" style="width: 1000px; float:left" id="maindiv2">
	                     </div>';
	                     
      ?>
   <!--<script>
   $("#yourCheckboxID").click(function ()
   {
      if ($("#boxchecked").attr("checked"))
      {
          $("#hidden").show();
      }
      else
      {
          $("#hidden").hide();
      }
    });
    </script>-->

  
    <!-- Site footer -->
    <!--<footer class="site-footer">
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
</footer>-->

  
     <!-- Importing Scripts -->
    <script src="plugins/jquery-2.1.1.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/magnific-popup/jquery.magnific.popup.min.js"></script>
    <script src="js/main.js"></script>
 
    
    <script>
$(document).ready(function(){
var action = '';
filter_data();
var choice;
     
function filter_data()
{   
$('.filter_data').html('<div id="loading" ></div>');
/* var minimum_price = $('#hidden_minimum_price').val();
var maximum_price = $('#hidden_maximum_price').val();*/
var gpu = get_filter('gpu');
var storage = get_filter('storage');
var memory = get_filter('memory');
var cpu = get_filter('cpu');
var mobo = get_filter('mobo');
var psu = get_filter('psu');
var cases = get_filter('cases');
$.ajax({
url:'php/fetch_data.php',
method:'POST',
data:{action:action, gpu:gpu,  storage:storage, memory:memory, cpu:cpu, mobo:mobo, psu:psu, cases:cases},
success:function(data){
$('.filter_data').html(data);
}
});
}

function get_filter(class_name) 
{   
var id; 
var counter = 0;
var filter = {}; // initialize a filter object
$('.'+class_name+':checked').each(function(){
id  = $(this).attr('id'); // store the id of the checkbox
 
filter[id+counter] = $(this).val(); // store the value of the checkbox as a value with the key of its id concatenated with counter
//filter.push($(this).val());
counter++; // increment counter
});
 
if(class_name == 'gpu' && counter > 0) {
action = 'gpu';
}
else if(class_name == 'storage' && counter > 0) {
action = 'storage';
}
else if(class_name == 'memory' && counter > 0) {
action = 'memory';
}
else if(class_name == 'cpu' && counter > 0) {
action = 'cpu';
}
else if(class_name == 'mobo' && counter > 0) {
action = 'mobo';
}
else if(class_name == 'cases' && counter > 0) {
action = 'cases';
}
else if(class_name == 'psu' && counter > 0) {
action = 'psu';
}
       
counter = 0;
return filter;
}

$('.common_selector').click(function(){
filter_data();
});

$('#price_range').slider({
range:true,
min:1000,
max:65000,
values:[1000, 65000],
step:500,
stop:function(event, ui)
{
$('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
$('#hidden_minimum_price').val(ui.values[0]);
$('#hidden_maximum_price').val(ui.values[1]);
filter_data();
}
});

});
</script>
  </body>
</html>