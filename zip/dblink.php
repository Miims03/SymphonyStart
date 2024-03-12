<?php 

try
{
  $pdo = new PDO('mysql:dbname=siteblog;host=localhost', "root","");  
  //On définit le mode d'erreur de PDO sur Exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo 'CONNECTION SUCCESSFULL';
  ?>
      <!-- <script>
        alert ("CONNECTION SUCCESSFULL")
      </script> -->
  <?php 

} catch (PDOException $e) {
  die('Erreur : CONNECTION CLOSED'. $e->getMessage());
}

?>





