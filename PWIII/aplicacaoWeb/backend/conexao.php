<?php
  $host = 'localhost';
  $db = 'bdFilme';
  $user = 'root';
  $senha = '';
  
  $pdo = new PDO("mysql:host=$host;dbname=$db",$user,$senha);
?>