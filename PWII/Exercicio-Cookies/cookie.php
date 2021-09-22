<?php
header("Location: index.php");

$categoria = $_GET['slcCategoria'];

setcookie('categoria', $categoria);

?>