<?php

//fetch_data.php

if(isset($_POST["action"]))
{
  if(!(isset($_SESSION['choice'])) || $_SESSION['choice'] == 'all' || $_SESSION['choice'] == ''){
  $query = "
  SELECT * FROM Product_List WHERE product_id IS NOT NULL AND product_name != ''
 ";
  }
  
 session_start();
 if (isset($_SESSION['choice'])){
   $choice = $_SESSION['choice'];
   switch ($choice){
    case 'gpu':
        $query = "
        SELECT * FROM Product_List p JOIN GPU_List g ON g.gpu_id = p.product_id AND g.gpu_category = p.category_id WHERE p.product_id != '' AND p.product_name != ''
        ";
        break;
    case 'cpu':
        $query = "
        SELECT * FROM Product_List p JOIN CPU_List c ON c.cpu_id = p.product_id AND c.cpu_category = p.category_id WHERE p.product_id != '' AND p.product_name != ''
        ";
        break;
    case 'storage':
        $query = "
        SELECT * FROM Product_List p JOIN STORAGE_List s ON s.storage_id = p.product_id AND s.storage_category = p.category_id WHERE p.product_id != '' AND p.product_name != ''
      ";
        break;

    case 'memory':
        $query = "
        SELECT * FROM Product_List p JOIN MEMORY_List m ON m.memory_id = p.product_id AND m.memory_category = p.category_id WHERE p.product_id != '' AND p.product_name != ''
        ";
        break;
   
    case 'cases':
         $query = "
        SELECT * FROM Product_List p JOIN CASE_List c ON c.case_id = p.product_id AND c.case_category = p.category_id WHERE p.product_id != '' AND p.product_name != ''
        ";
        break;
    case 'psu':
        $query = "
        SELECT * FROM Product_List p JOIN PSU_List ps ON ps.psu_id = p.product_id AND ps.psu_category = p.category_id WHERE p.product_id != '' AND product_name != ''
        ";
        break;
    case 'mobo':
        $query = "
        SELECT * FROM Product_List p JOIN MOBO_List m ON m.mobo_id = p.product_id AND m.mobo_category = p.category_id WHERE p.product_id != '' AND p.product_name != ''
        ";
        break;

    default:
            $query = "
            SELECT * FROM Product_List WHERE product_id IS NOT NULL AND product_name != ''
            ";
            
   }
 } 

 

 



 if(isset($_POST["gpu"]))
 {
   $query = "
  SELECT * FROM Product_List p JOIN GPU_List g ON g.gpu_id = p.product_id AND g.gpu_category = p.category_id WHERE p.product_id != '' AND p.product_name != ''
 ";

  $gpu = (array)$_POST['gpu']; // Array with mixed filters
  $brand = $mem = array(); // initialize brand and memory arrays
  foreach($gpu as $key => $value){// iterate through mixed array
    if(substr($key,0,5) == 'brand') // if the key is brand put in brand array
      array_push($brand,$value);
    else if(substr($key,0,6) == 'memory')// if the key is memory put in memory array
      array_push($mem,$value);
  }
  // create filter strings deliminated by ,
  $brand_filter = implode("','", $brand);
  $memory_filter = implode("','", $mem);

  if($brand_filter == ''){ // if no brand is selected
    $query .= " AND gpu_memory IN('".$memory_filter."')";
  }
  else if($memory_filter == '' ){ // if no memory is selected
  $query .= " AND gpu_brand IN('".$brand_filter."')";
  }
  else{ // if both have a selection
  $query .= "AND gpu_brand IN('".$brand_filter."') AND gpu_memory IN('".$memory_filter."')
  ";
  }

 }

 if(isset($_POST["storage"]))
 {
   $query = "
  SELECT * FROM Product_List p JOIN STORAGE_List s ON s.storage_id = p.product_id AND s.storage_category = p.category_id WHERE p.product_id != '' AND p.product_name != ''
 ";

  $storage = (array)$_POST['storage']; // Array with mixed filters
  $brand = $storageCapacity = $storageType = array(); // initialize brand and memory arrays
  foreach($storage as $key => $value){// iterate through mixed array
    if(substr($key,0,5) == 'brand') {
      array_push($brand,$value);
    }
    else if(substr($key,0,15) == 'storageCapacity') {
      array_push($storageCapacity,$value);
    }
    else if (substr($key,0,11) == 'storageType') {
            array_push($storageType,$value);
    }
  }
  // create filter strings deliminated by ,
  $brand_filter = implode("','", $brand);
  $storageCapacity_filter = implode("','", $storageCapacity);
  $storageType_filter = implode("','", $storageType);
  
  if($brand_filter == '' && $storageCapacity_filter == '') {
    $query .= "  AND storage_type IN('".$storageType_filter."')";
  }

  else if($brand_filter == '' && $storageType_filter == '') {
    $query .= " AND storage_capacity IN('".$storageCapacity_filter."')";
  }
  
  else if($storageCapacity_filter == '' && $storageType_filter == '') {
    $query .= " AND storage_brand IN('".$brand_filter."')";
  }
  
  else if($brand_filter == ''){ // if no brand is selected
    $query .= " AND storage_capacity IN('".$storageCapacity_filter."') AND storage_type IN('".$storageType_filter."')";
  }
  else if($storageCapacity_filter == '' ){ // if no capcity is selected
  $query .= " AND storage_brand IN('".$brand_filter."') AND storage_type IN('".$storageType_filter."')";
  }
  else if($storageType_filter == '' ){ // if no type is selected
  $query .= " AND storage_brand IN('".$brand_filter."') AND storage_capacity IN('".$storageCapacity_filter."')";
  }
  else{ // if all have a selection
  $query .= "AND storage_brand IN('".$brand_filter."') AND storage_capacity IN('".$storageCapacity_filter."') AND storage_type IN('".$storageType_filter."')
  ";
  }

 }


  if(isset($_POST["cpu"]))
 {
   
   $query = "
  SELECT * FROM Product_List p JOIN CPU_List c ON c.cpu_id = p.product_id AND c.cpu_category = p.category_id WHERE p.product_id != '' AND p.product_name != ''
 ";
  $cpu = (array)$_POST['cpu'];
  $tdp = $integrated = $cores = $cpubrand = array(); 
  foreach($cpu as $key => $value){
    if(substr($key,0,3) == 'tdp') 
      array_push($tdp,$value);
    else if(substr($key,0,10) == 'integrated')
      array_push($integrated,$value);
    else if(substr($key,0,5) == 'cores')
      array_push($cores,$value);
    else if(substr($key,0,8) == 'cpubrand')
      array_push($cpubrand,$value);  
  }
  // create filter strings deliminated by ,
  $cpubrand_filter = implode("','", $cpubrand);
  $tdp_filter = implode("','", $tdp);
  $integrated_filter = implode("','", $integrated);
  $cores_filter = implode("','", $cores);
 
  if($tdp_filter == ''  && $cores_filter == '' && $integrated_filter == '' && $cpubrand_filter != ''){ // brand
    $query .= " AND cpu_brand IN('".$cpubrand_filter."')";
  }
  else if($tdp_filter == ''  && $cores_filter != '' && $integrated_filter == '' && $cpubrand_filter == ''){ // cores
  $query .= " AND cpu_cores_threads IN('".$cores_filter."')";
  }
  else if($tdp_filter == ''  && $cores_filter == '' && $integrated_filter != '' && $cpubrand_filter == ''){ // integrated
  $query .= " AND cpu_integrated_graphics IN('".$integrated_filter."')";
  }
  else if($tdp_filter != ''  && $cores_filter == '' && $integrated_filter == '' && $cpubrand_filter == '' ){ // tdp
  $query .= " AND cpu_tdp IN('".$tdp_filter."')";
  }
  else if($tdp_filter != ''  && $cores_filter == '' && $integrated_filter != '' && $cpubrand_filter == ''){ // tdp integrated 
  $query .= " AND cpu_tdp IN('".$tdp_filter."') AND cpu_integrated_graphics IN('".$integrated_filter."')";
  }
  else if($tdp_filter != ''  && $cores_filter != '' && $integrated_filter == '' && $cpubrand_filter == ''){ // tdp cores
  $query .= " AND cpu_tdp IN('".$tdp_filter."') AND cpu_cores_threads IN('".$cores_filter."')";
  }
  else if($tdp_filter != ''  && $cores_filter == '' && $integrated_filter == '' && $cpubrand_filter != ''){ // tdp cpubrand
  $query .= " AND cpu_tdp IN('".$tdp_filter."') AND cpu_brand IN('".$cpubrand_filter."')";
  }
  else if($tdp_filter == ''  && $cores_filter != '' && $integrated_filter != '' && $cpubrand_filter == ''){ // integrated cores
  $query .= " AND cpu_integrated_graphics IN('".$integrated_filter."') AND cpu_cores_threads IN('".$cores_filter."')";
  }
  else if($tdp_filter == ''  && $cores_filter == '' && $integrated_filter != '' && $cpubrand_filter != ''){ // integrated cpubrand
 $query .= " AND cpu_integrated_graphics IN('".$integrated_filter."') AND cpu_brand IN('".$cpubrand_filter."')";
  }
  else if($tdp_filter == ''  && $cores_filter != '' && $integrated_filter == '' && $cpubrand_filter != ''){ // cores cpubrand
 $query .= " AND cpu_cores_threads IN('".$cores_filter."') AND cpu_brand IN('".$cpubrand_filter."')";
  }
  else if($tdp_filter != ''  && $cores_filter != '' && $integrated_filter != '' && $cpubrand_filter == ''){ // tdp integrated cores
 $query .= " AND cpu_integrated_graphics IN('".$integrated_filter."') AND cpu_tdp IN('".$tdp_filter."') AND cpu_cores_threads IN('".$cores_filter."')";
  }
  else if($tdp_filter != ''  && $cores_filter == '' && $integrated_filter != '' && $cpubrand_filter != ''){ // tdp integrated cpubrand
  $query .= " AND cpu_tdp IN('".$tdp_filter."') AND cpu_integrated_graphics IN('".$integrated_filter."') AND cpu_brand IN('".$cpubrand_filter."')";
  }
  else if($tdp_filter != ''  && $cores_filter != '' && $integrated_filter == '' && $cpubrand_filter != ''){ // tdp cores cpubrand
  $query .= " AND cpu_tdp IN('".$tdp_filter."') AND cpu_cores_threads IN('".$cores_filter."') AND cpu_brand IN('".$cpubrand_filter."')";
  }
  else if($tdp_filter == ''  && $cores_filter != '' && $integrated_filter != '' && $cpubrand_filter != ''){ // integrated cores cpubrand
  $query .= " AND cpu_integrated_graphics IN('".$integrated_filter."') AND cpu_cores_threads IN('".$cores_filter."') AND cpu_brand IN('".$cpubrand_filter."')";
  }
  else if($tdp_filter != ''  && $cores_filter != '' && $integrated_filter != '' && $cpubrand_filter != ''){ // All
   $query .= " AND cpu_integrated_graphics IN('".$integrated_filter."') AND cpu_tdp IN('".$tdp_filter."') AND cpu_cores_threads IN('".$cores_filter."') AND cpu_brand IN('".$cpubrand_filter."')";

  }

 }

 if(isset($_POST["memory"]))
 {
   $query = "
  SELECT * FROM Product_List p JOIN MEMORY_List m ON m.memory_id = p.product_id AND m.memory_category = p.category_id WHERE p.product_id != '' AND p.product_name != ''
 ";
  
  $memory = (array)$_POST['memory']; // Array with mixed filters
  $brand = $speed = $size = $rgb = array(); // initialize brand and memory arrays
  foreach($memory as $key => $value){// iterate through mixed array
    if(substr($key,0,5) == 'brand') // if the key is brand put in brand array
      array_push($brand,$value);
    else if(substr($key,0,5) == 'speed')// if the key is speed put in memory array
      array_push($speed,$value);
    else if(substr($key,0,10) == 'memorySize') {// if the key is size put in memory array
      array_push($size,$value);
    }
    else if(substr($key,0,3) == 'rgb')// if the key is rgb put in memory array
      array_push($rgb,$value);    
  }
  // create filter strings deliminated by ,
  $brand_filter = implode("','", $brand);
  $speed_filter = implode("','", $speed);
  $size_filter = implode("','", $size);
  $rgb_filter = implode("','", $rgb);

  if($brand_filter == '' && $speed_filter == '' && $size_filter == '') {
    $query .= " AND memory_rgb IN('".$rgb_filter."')";
  }

  else if($brand_filter == '' && $speed_filter == '' && $rgb_filter == '') {
    $query .= " AND memory_size IN('".$size_filter."')";
  }

  else if($brand_filter == '' && $size_filter == '' && $rgb_filter == '') {
    $query .= " AND memory_speed IN('".$speed_filter."')";
  }

  else if($speed_filter == '' && $size_filter == '' && $rgb_filter == '') {
    $query .= " AND memory_brand IN('".$brand_filter."')";
  }



  else if($brand_filter == '' && $speed_filter == '') {
    $query .= " AND memory_size IN('".$brand_filter."') AND memory_rgb IN('".$rgb_filter."')";
  }
  
  else if($brand_filter == '' && $size_filter == '') {
    $query .= " AND memory_speed IN('".$speed_filter."') AND memory_rgb IN('".$rgb_filter."')";
  }
  
  else if($brand_filter == '' && $rgb_filter == '') {
    $query .= " AND memory_speed IN('".$speed_filter."') AND memory_size IN('".$size_filter."')";
  }

  else if($speed_filter == '' && $size_filter == '') {
    $query .= " AND memory_brand IN('".$brand_filter."') AND memory_rgb IN('".$rgb_filter."')";
  }

  else if($speed_filter == '' && $rgb_filter == '') {
    $query .= " AND memory_brand IN('".$brand_filter."') AND memory_size IN('".$size_filter."')";
  }
  
  else if($size_filter == '' && $rgb_filter == '') {
    $query .= " AND memory_brand IN('".$brand_filter."') AND memory_speed IN('".$speed_filter."')";
  }



  else if($brand_filter == ''){ // if no brand is selected
    $query .= " AND memory_speed IN('".$speed_filter."') AND memory_size IN('".$size_filter."') AND memory_rgb IN('".$rgb_filter."')";
  }

  else if($speed_filter == '' ){ // if no memory is selected
  $query .= " AND memory_brand IN('".$brand_filter."') AND memory_size IN('".$size_filter."') AND memory_rgb IN('".$rgb_filter."')";
  }

  else if($size_filter == '' ){ // if no memory is selected
  $query .= " AND memory_brand IN('".$brand_filter."') AND memory_speed IN('".$speed_filter."') AND memory_rgb IN('".$rgb_filter."')";
  }

  else if($rgb_filter == '' ){ // if no memory is selected
  $query .= " AND memory_brand IN('".$brand_filter."') AND memory_speed IN('".$speed_filter."') AND memory_size IN('".$size_filter."')";
  }
  else{ // if both have a selection
  $query .= " AND memory_brand IN('".$brand_filter."') AND memory_speed IN('".$speed_filter."') AND memory_size IN('".$size_filter."') AND memory_rgb IN('".$rgb_filter."')";
  }
  }

  if(isset($_POST["mobo"]))
 {
   $query = "
  SELECT * FROM Product_List p JOIN MOBO_List m ON m.mobo_id = p.product_id AND m.mobo_category = p.category_id WHERE p.product_id != '' AND p.product_name != ''
 ";

  $mobo = (array)$_POST['mobo']; // Array with mixed filters
  $manufacturer = $chipset = $formFactor = $socket = array(); // initialize brand and memory arrays
  foreach($mobo as $key => $value){// iterate through mixed array
    if(substr($key,0,12) == 'manufacturer') // if the key is brand put in brand array
      array_push($manufacturer,$value);
    else if(substr($key,0,7) == 'chipset')// if the key is memory put in memory array
      array_push($chipset,$value);
    else if(substr($key,0,10) == 'formFactor')// if the key is memory put in memory array
      array_push($formFactor,$value);
    else if(substr($key,0,6) == 'socket')// if the key is memory put in memory array
      array_push($socket,$value);    
  }
  // create filter strings deliminated by ,
  $manufacturer_filter = implode("','", $manufacturer);
  $chipset_filter = implode("','", $chipset);
  $formFactor_filter = implode("','", $formFactor);
  $socket_filter = implode("','", $socket);

  if($manufacturer_filter == '' && $chipset_filter == '' && $formFactor_filter == '') {
    $query .= " AND mobo_socket IN('".$socket_filter."')";
  }
  else if($manufacturer_filter == '' && $chipset_filter == '' && $socket_filter == '') {
    $query .= " AND mobo_form_factor IN('".$formFactor_filter."')";
  }

  else if($manufacturer_filter == '' && $formFactor_filter == '' && $socket_filter == '') {
    $query .= " AND mobo_chipset IN('".$chipset_filter."')";
  }

  else if($chipset_filter == '' && $formFactor_filter == '' && $socket_filter == '') {
    $query .= " AND mobo_manufacturer IN('".$manufacturer_filter."')";
  }



  else if($manufacturer_filter == '' && $chipset_filter == '') {
    $query .= " AND mobo_form_factor IN('".$formFactor_filter."') AND mobo_socket IN('".$socket_filter."')";
  }
  
  else if($manufacturer_filter == '' && $formFactor_filter == '') {
    $query .= " AND mobo_chipset IN('".$chipset_filter."') AND mobo_socket IN('".$socket_filter."')";
  }
  
  else if($manufacturer_filter == '' && $socket_filter == '') {
    $query .= " AND mobo_chipset IN('".$chipset_filter."') AND mobo_form_factor IN('".$formFactor_filter."')";
  }

  else if($chipset_filter == '' && $formFactor_filter == '') {
    $query .= " AND mobo_manufacturer IN('".$manufacturer_filter."') AND mobo_socket IN('".$socket_filter."')";
  }

  else if($chipset_filter == '' && $socket_filter == '') {
    $query .= " AND mobo_manufacturer IN('".$manufacturer_filter."') AND mobo_form_factor IN('".$formFactor_filter."')";
  }
  
  else if($formFactor_filter == '' && $socket_filter == '') {
    $query .= " AND mobo_manufacturer IN('".$manufacturer_filter."') AND mobo_chipset IN('".$chipset_filter."')";
  }



  else if($manufacturer_filter == ''){ // if no brand is selected
    $query .= " AND mobo_chipset IN('".$chipset_filter."') AND mobo_form_factor IN('".$formFactor_filter."') AND mobo_socket IN('".$socket_filter."')";
  }

  else if($chipset_filter == '' ){ // if no memory is selected
  $query .= " AND mobo_manufacturer IN('".$manufacturer_filter."') AND mobo_form_factor IN('".$formFactor_filter."') AND mobo_socket IN('".$socket_filter."')";
  }

  else if($formFactor_filter == '' ){ // if no memory is selected
  $query .= " AND mobo_manufacturer IN('".$manufacturer_filter."') AND mobo_chipset IN('".$chipset_filter."') AND mobo_socket IN('".$socket_filter."')";
  }

  else if($socket_filter == '' ){ // if no memory is selected
  $query .= " AND mobo_manufacturer IN('".$manufacturer_filter."') AND mobo_chipset IN('".$chipset_filter."') AND mobo_form_factor IN('".$formFactor_filter."')";
  }

  else{ // if both have a selection
  $query .= " AND mobo_manufacturer IN('".$manufacturer_filter."') AND mobo_chipset IN('".$chipset_filter."') AND mobo_form_factor IN('".$formFactor_filter."') AND mobo_socket IN('".$socket_filter."')";
  }

 }


 if(isset($_POST["cases"]))
 {
   $query = "
  SELECT * FROM Product_List p JOIN CASE_List c ON c.case_id = p.product_id AND c.case_category = p.category_id WHERE p.product_id != '' AND p.product_name != ''
 ";

  $cases = (array)$_POST['cases']; // Array with mixed filters
  $caseManufacturer = $caseFormFactor = $caseColor = array(); 
  foreach($cases as $key => $value){// iterate through mixed array
    if(substr($key,0,16) == 'caseManufacturer') 
      array_push($caseManufacturer,$value);
    else if(substr($key,0,14) == 'caseFormFactor')
      array_push($caseFormFactor,$value);
    else if(substr($key,0,9) == 'caseColor')
      array_push($caseColor,$value);
  }
  // create filter strings deliminated by ,
  $caseManufacturer_filter = implode("','", $caseManufacturer);
  $caseFormFactor_filter = implode("','", $caseFormFactor);
  $caseColor_filter = implode("','", $caseColor);
 
  if($caseManufacturer_filter == '' && $caseFormFactor_filter == '') {
    $query .= " AND case_color IN('".$caseColor_filter."')";
  }
  else if($caseManufacturer_filter == '' && $caseColor_filter == '') {
    $query .= " AND case_form_factor IN('".$caseFormFactor_filter."')";
  }
  else if($caseFormFactor_filter == '' && $caseColor_filter == '') {
    $query .= " AND case_manufacturer IN('".$caseManufacturer_filter."')";
  }
  else if($caseManufacturer_filter == ''){
    $query .= " AND case_form_factor IN('".$caseFormFactor_filter."') AND case_color IN('".$caseColor_filter."')";
  }
  else if($caseFormFactor_filter == '' ){ 
    $query .= " AND case_manufacturer IN('".$caseManufacturer_filter."') AND case_color IN('".$caseColor_filter."')";
  }
  else if($caseColor_filter == ''){
    $query .= " AND case_form_factor IN('".$caseFormFactor_filter."') AND case_manufacturer IN('".$caseManufacturer_filter."')";
  }
  else{ 
    $query .= "AND case_manufacturer IN('".$caseManufacturer_filter."') AND case_form_factor IN('".$caseFormFactor_filter."') AND case_color IN('".$caseColor_filter."')
  ";
  }

 }

 if(isset($_POST["psu"]))
 {
   $query = "
  SELECT * FROM Product_List p JOIN PSU_List ps ON ps.psu_id = p.product_id AND ps.psu_category = p.category_id WHERE p.product_id != '' AND product_name != ''
 ";

  $psu = (array)$_POST['psu']; 
  $rating = $watts = $psubrand = array(); 
  foreach($psu as $key => $value){
    if(substr($key,0,6) == 'rating')
      array_push($rating,$value);
    else if(substr($key,0,5) == 'watts')
      array_push($watts,$value);
    else if(substr($key,0,8) == 'psubrand')
      array_push($psubrand,$value);
  }
  $rating_filter = implode("','", $rating);
  $psubrand_filter = implode("','", $psubrand);
  $watts_filter = implode("','", $watts);

  
  if($rating_filter != '' && $watts_filter != '' && $psubrand_filter == ''){ // r w
    $query .= " AND psu_rating IN('".$rating_filter."') AND psu_watts IN('".$watts_filter."')";
  }
  else if($rating_filter != '' && $watts_filter == '' && $psubrand_filter != ''){ // r p
    $query .= " AND psu_rating IN('".$rating_filter."') AND psu_brand IN('".$psubrand_filter."')";
  }
  else if($rating_filter == '' && $watts_filter != '' && $psubrand_filter != ''){ // w p
    $query .= " AND psu_watts IN('".$watts_filter."') AND psu_brand IN('".$psubrand_filter."')";
  } //rating watts psubrand
  else if($rating_filter != '' && $watts_filter == '' && $psubrand_filter == ''){ // r
    $query .= " AND psu_rating IN('".$rating_filter."')";
  }
  else if($rating_filter == '' && $watts_filter != '' && $psubrand_filter == ''){ // w
    $query .= " AND psu_watts IN('".$watts_filter."')";
  }
  else if($rating_filter == '' && $watts_filter == '' && $psubrand_filter != ''){ // p
    $query .= " AND psu_brand IN('".$psubrand_filter."')";
  }
  else if($rating_filter != '' && $watts_filter != '' && $psubrand_filter != ''){ // r w p
    $query .= " AND psu_rating IN('".$rating_filter."') AND psu_watts IN('".$watts_filter."') AND psu_brand IN('".$psubrand_filter."')";
  }

 }                     



 require 'query.php';
 $result = sendQuery($query);
 $output = '';

  foreach($result as $row)
  { 
   $output .= '
    <div class="col-3 col-3 col-3">
    <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:470px;text-align:center">
        <img style="width:70px;height:70px;" src="'. $row['product_pic_url'] .'" alt="" ><br>

     <p ><strong style = "color:blue;">'. $row['product_name'] .'</a></strong></p>
     <h4 style="margin-bottom:5px;" class="text-danger" >$'. $row['product_amazon_price'] .'</h4>
     <a href="'.$row['product_amazon_url'].'" target="_blank" ">
         <img style="width:70px;height:50px;border:1px solid black;background-size: cover;margin-bottom:10px;" src="images/amazon.jpg"
         width=150" height="70">
      </a>
      <h4 style="margin-bottom:5px;" class="text-danger" >$'. $row['product_newegg_price'] .'</h4>
      <a href="'.$row['product_newegg_url'].'" target="_blank" ">
         <img style="width:70px;height:50px;border:1px solid black;background-size: cover;margin-bottom:10px;" src="images/newegg.jpg"
         width=150" height="70">
      </a>
     </p>
    </div>
   </div>
   ';
  }
 // $output = '<h3>No Data Found</h3>'; 
 echo $output;
}

?>