<?php
require "helper.php"; 

require_once baseUrl('database/Database.php');
require_once baseUrl('config/connect.php'); 

try {
  // Create a new Database instance
  $db = new Database($config);
  
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
  exit;
}
