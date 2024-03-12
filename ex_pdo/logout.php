<?php 

session_start();
// unset($_SESSION['connected']);
// unset($_SESSION['pseudo']);
// unset($_SESSION['user_id']);
session_unset();
header('location: index.php');