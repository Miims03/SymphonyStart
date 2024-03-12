<?php
$titre = 'Enregistrer';
$nav = 'enre';
require 'header.php';
if (is_connected()) {
    echo '<script> location.replace("profil.php"); </script>';
} else {
?>



<?php

$error = null;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['pseudo']) && !empty($_POST['password']) && !empty($_POST['birth_of_date']) && !empty($_POST['ville'])) {
        if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['birth_of_date']) && isset($_POST['ville'])) {
            try {
            $request = $pdo->prepare('INSERT INTO users VALUES (:id_user, :first_name, :last_name, :pseudo, :password, :birth_of_date, :id_ville_user)');
            $request->execute([
                'id_user' => NULL,
                'first_name'=> $_POST['first_name'],
                'last_name'=> $_POST['last_name'],
                'pseudo'=> $_POST['pseudo'],
                'password'=> $_POST['password'],
                'birth_of_date'=> $_POST['birth_of_date'],
                'id_ville_user'=> $_POST['ville'],
                
            ]);
            header('location: login.php');
            } catch (PDOException $e) {
                $error = 'Se pseudo existe déjà.';
            }
        }
    }else{
        $error = 'Remplir les champs.';
    }
}
?>


<section id='base'>
    <h1>S'enregistrer</h1>
    <?php
    
    if($error){
        echo $error;
    }
    
    ?>
    <form action="enregistrer.php" method='POST'>
        <label for="first_name"> First Name</label>
        <input type="text" name='first_name'>

        <label for="last_name"> Last Name</label>
        <input type="text" name='last_name'>

        <label for="pseudo"> Pseudo</label>
        <input type="text" name='pseudo'>

        <label for="password"> Password</label>
        <input type="password" name='password'>

        <label for="birth_of_date"> Birth of Date</label>
        <input type="date" name='birth_of_date'>

        <label for="ville">Ville</label>
        <select name="ville" id="ville">
            <option value="">Ville Choice</option>
        

        <?php
        $request = $pdo->query('SELECT id_ville,name_ville FROM ville');
        $display = $request->fetchAll(PDO::FETCH_OBJ);
        foreach ($display as $elem) {
        
        ?>
        
        <option value="<?php echo $elem->id_ville ?>"> <?php echo $elem->name_ville ?> </option>
        <?php } ?>
        </select>
        <button type='submit'>S'enregistrer</button> 
    </form>

</section>




<?php
}
require 'footer.php';
?>