<?php

$server   = 'localhost';
$database = 'fondos_recaudacion';
$username = 'root';
$password = 'root';
$puerto   = '3306';
$socket   = '/Applications/MAMP/tmp/mysql/mysql.sock';

try {
  $con = "mysql:host=localhost;dbname=$database;dbport=$puerto;dbsocket=$socket;";
  $options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  );
  $BD = new PDO($con, $username, $password);
} catch (PDOException $e){
  //show error
  echo '<p class="bg-danger">'.$e->getMessage().'</p>';
  exit;
}



?>