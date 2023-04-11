<?php
  $hostname="ec2-54-90-239-18.compute-1.amazonaws.com";
  $username="dany";
  $password="123456";
  $database="progetto";
  $port="3306";

  $conn=new mysqli($hostname,$username,$password,$database,$port);

  if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
  } 
?>