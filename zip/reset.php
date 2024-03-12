<?php
session_start();
//c'est pour tuer toutes les sessions existantes
session_unset();
$title="Reset";
$nav = "reset";
require "header.php";
