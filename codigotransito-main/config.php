<?php

$server = 'localhost:33065';
$username = 'root';
$password = '';
$database = 'codigo';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
