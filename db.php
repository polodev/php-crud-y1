<?php
$dsn = 'mysql:host=localhost;dbname=company';
$user = 'root';
$password = '';
$options = [];
$connection = new PDO($dsn, $user, $password, $options);


// try {
//   $connection = new PDO($dsn, $user, $password, $options);
//   echo 'successful';
// } catch (PDOException $e) {
//   die ('connection failed' . $e->getMessage());
// } 

