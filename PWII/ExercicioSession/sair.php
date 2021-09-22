<?php

session_start();
unset($_SESSION['loginS']);
unset($_SESSION['senhaS']);
session_destroy();
header("Location: index.php");

?>