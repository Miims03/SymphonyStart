<?php
$titre = 'Profil';
$nav = 'profil';
require 'header.php';
if (!is_connected()) {
    echo '<script> location.replace("login.php"); </script>';
} else {

$request = $pdo->query('SELECT pseudo,first_name,last_name,birth_of_date,id_ville_user FROM users WHERE id_user = "' . $_SESSION['user_id'] . '"');
$display = $request->fetchAll(PDO::FETCH_OBJ);
foreach($display as $elem){
?>

<section id="base">



<h1>Bienvenue <?php echo $elem->pseudo?></h1>
<img src="asset/profil.jpg" >
<h3>Pseudo : <?php echo $elem->pseudo?></h3>
<h3>Prenom : <?php echo $elem->first_name?></h3>
<h3>Nom : <?php echo $elem->last_name?></h3>
<?php 
$request = $pdo->query('SELECT name_ville, nationnalite FROM ville WHERE id_ville = "' . $elem->id_ville_user . '"');
$display = $request->fetchAll(PDO::FETCH_OBJ);
foreach ($display as $elem) {
?>
<h3>Ville : <?php echo $elem->name_ville?></h3>
<h3>Nationnalté : <?php echo $elem->nationnalite?></h3>
<?php
}
?>

</section>
<?php
}
}
require 'footer.php';
?>