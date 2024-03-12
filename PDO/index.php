<?php 
try {

    $pdo = new PDO('mysql:dbname=magasin_jeuxvideo;host=localhost','root','');

    $res = $pdo->query('SELECT * from consoles');

    // echo ('connection gg');

    var_dump(var_dump($res->fetchAll()));

} catch (PDOException $e) {

    die('Erreur : '.$e->getMessage());
    
}

?>