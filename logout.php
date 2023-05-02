<?php 
if (!isset($_SESSION['identity'])) { session_start(); }
$_SESSION = array(); 
session_destroy(); 
header("Location: index"); // Or wherever you want to redirect
exit();
?>