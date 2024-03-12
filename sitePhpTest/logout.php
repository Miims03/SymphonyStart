<?php
session_start();

$title = "Logout";
$nav = "logout";

// unset($_SESSION['repAdd']);
// unset($_SESSION['repSous']);
// unset($_SESSION['repMult']);
// unset($_SESSION['repDiv']);
unset($_SESSION['connected']);
header('location: index.php');

?>