<?php
session_start();
$_SESSION['connected'] = false;
session_unset();
header("Location: home.php");
session_unset();
