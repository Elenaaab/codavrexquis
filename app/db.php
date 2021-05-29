<?php


$dsn = 'mysql:dbname=codavre;host=localhost;charset=UTF8mb4';
$user = 'codavre';
$password = 'codavre';

$pdo = new PDO(
    $dsn,
    $user,
    $password,
    array( 
      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    )
  );