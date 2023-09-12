<?php 
  function sendQuery($sentQuery){ # receives query
    $url = 'https://clf6ts5v55.execute-api.us-east-1.amazonaws.com/default'; # the url of the aws lambda function
    $query = [ # creates a json object with 'query' mapped to the query we want to run
    'query' => $sentQuery
    ];

    $opts = array('http' =>  #sets the header options to be sent
    array(
      'method' => 'POST', 
      'header' => 'Content-type: application/json', # tells the server that we will send and receive a json
      'content' => json_encode($query) # converts $query from a json string to a json object
    ));

    $context = stream_context_create($opts); #inserts the options into a context
    $response = file_get_contents($url,false,$context); # retrieves the json string from the server
   
    if (isset($_GET['q'])){
       echo $response;
    }
    
    $response = json_decode($response); # turns json string into an array of "stdclass" objects, each holds a row of the query results
    //var_dump($response);
    $Array = null;
    $i = 0;
    foreach($response as $value){ # iterates through array of objects and converts each object to an associative array and adds it to a 2d array
    $Array[$i] = (array)$value;
    $i++;
    }
    return $Array;
  }

  if (isset($_GET['q'])){  // If query sent by javascript in a get request, this runs
    sendQuery($_GET['q']); // sends query into sendQuery function and returns results
  }
?>

