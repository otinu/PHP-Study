<?php

try {
  $db = new PDO($dsn, $user, $password);
} catch(PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
} 

?>