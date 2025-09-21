<?php 
session_start();
unset($_SESSION["numeros"]);
header("Location: index.php");
