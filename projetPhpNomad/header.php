<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="style.css">
   <title>
      <?php
      if (isset($titre)) {
         echo $titre;
      } else {
         echo "Nomad";
      }
      require 'db.php';
      require 'function/authentification.php';
      session_start();
      ?>
   </title>
</head>

<body>

   <header>
      <a class='logo' href='index.php'>Nomad</a>
      <ul class='ul1'>
         <li><a href="index.php" class="<?php if ($nav === 'index') {
            echo 'active';
         } ?>">Home</a></li>
      </ul>

      <ul class='ul2'>
         <?php
         if (!is_connected()) {
            ?>
            <li><a href="login.php" class="<?php if ($nav === 'login') {
               echo 'active';
            } ?>">Login</a></li>
            <p> / </p>
            <li><a href="enregistrer.php" class="<?php if ($nav === 'enre') {
               echo 'active';
            } ?>">S'enregistrer</a></li>
         <?php
         } else {
            ?>
            <li><a href="profil.php" class="<?php if ($nav === 'profil') {
               echo 'active';
            } ?>">Profil</a></li>
            <p> / </p>
            <li>
               <a href="deco.php">Logout</a>
            </li>
         </ul>
      <?php
         }
         ?>
   </header>