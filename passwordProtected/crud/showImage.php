<?php

  define('DB_USER','crudUser');
  define('DB_PASSWORD','password');
  define('DB_HOST','localhost');
  define('DB_NAME','films');

  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
  if (!$conn) 
  {
    die("Connection failed: " . mysqli_connect_error());
  }


  $id = $_REQUEST['id'];

  $picture = "SELECT * FROM data WHERE id = $id";

  $toDisplay = mysqli_query($conn, $picture);
  $toDisplay = mysqli_fetch_assoc($toDisplay);

  $toDisplay = $toDisplay['picture'];


  header("Content-type: image/jpg");
  echo $toDisplay;


  
?>
