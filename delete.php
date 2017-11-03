<?php 
require 'db.php';
$id = $_GET['id'];
if ($connection->query("DELETE FROM employees WHERE id=$id") ) {
  header("Location: /");
}
