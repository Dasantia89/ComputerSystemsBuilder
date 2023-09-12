
function JSQuery(query) {  
  var request = new XMLHttpRequest();
  request.open('GET', 'php/query.php?q='+query, false);  // `false` makes the request synchronous
  request.send();

  if (request.status === 200) {
    return request.responseText; // receives json string with query results from php/query.php
  }   
}
