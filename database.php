<?php

  $host = "localhost"; 
  $port = "4000";
  $db = "control_db";
  $username = "pgsql";
  $password = "pgsql";

  try {     
    
      $conn = new PDO("pgsql:host=$host;port=$port;dbname=$db;user=$username;password=$password");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);      

  } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
  }

?>
