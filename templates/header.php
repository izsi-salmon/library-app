
<?php

  if(is_dir('vendor')){
    require 'vendor/autoload.php';
  } else{
    require '../vendor/autoload.php';
  }

  // Getting the project URL from the environment file – dynamic alternative to hard coding the URL
  $dotenv = new Dotenv\Dotenv(__DIR__ . '/..');
  $dotenv->load();
  $baseURL = getenv('PROJECT_URL');

  require('connection.php');

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <base href="<?= $baseURL ?>">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Library App | <?= $page ?></title>
</head>
