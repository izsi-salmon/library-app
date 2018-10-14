<?php

  // database connection
  // $dbc = mysqli_connect(host, username, password, table);
  $dbc = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB_TABLE'));
  if($dbc){
    // var_dump('connection successful');
    $dbc->set_charset('utf8');
  } else{
    die('Connect to database failed, please check your environment files and make sure username, password and table names are coorect.');
  }


 ?>
