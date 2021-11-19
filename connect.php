<?php

$server = "localhost";
$user = "root";
$pass = "";

$database = "authworld";

$connection_string = 'mysql:host=' . $server . ';dbname=' . $database;

$pdo = new PDO($connection_string, $user, $pass);

try {
  // 
  $pdo;
  print "<script type='text/javascript'>console.log('Conectado com sucesso!');</script>";
  // 
} catch (PDOException $e) {
  // 
  print "<script type='text/javascript'>console.log('Falha ao conectar!');</script>";
  // 
}
