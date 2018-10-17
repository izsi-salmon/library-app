<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CRUD</title>
</head>
<body>
  <h1>CRUD</h1>
  <?php
    $dsn="mysql:dbname=students";
    $username="root";
    $password="root";

    try{
      $conn = new PDO($dsn, $username, $password);
      $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
      echo "Connection failed: ".$e->getMessage();
    }

    $id="1234";
    // $sql ="DELETE from students where student_id=$id"; // Deleting row
    die($sql);

    // $sql = "SELECT * FROM students";
    // echo "<ul>";
    // try{
    //   $rows= $conn->query($sql);
    //   foreach ($rows as $row){
    //     echo "<li>".$row["student_id"]." ".$row["student_name"]." ".$row["class_code"]."</li>";
    //   }
    // } catch (PDOException $e) {
    //   echo "Query failed: ".$e->getMessage();
    // }

    echo "</ul>";

    $conn = null; // close the connection




   ?>
</body>
</html>
