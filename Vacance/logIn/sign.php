<?php 
        include_once './conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incription</title>
    <link rel="stylesheet" href="sign_style.css">
</head>
<body>
<section id="sec1">
    <h1>Inscription</h1>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $pseudo = $_POST['pseudo'];
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $psw = $_POST['psw'];
        $erreur = '';

        

        if(!empty($fname) && !empty($lname) && !empty($dateOfBirth) && !empty($pseudo) && !empty($userName) && ($email) && ($psw)){

            echo "<p class='succes'>Félicitation vous êtes désormais inscrit.</p>";

            $sql = "INSERT INTO login (fname, lname, dateOfBirth, pseudo, userName, email, psw) VALUES ('$fname','$lname','$dateOfBirth','$pseudo','$userName','$email','$psw')";
            $result = mysqli_query($conn, $sql);

            header("Location: http://localhost/php/Vacance/logIn/");

        }else{ 

            echo "<p class='error'>Erreur lors de l'inscription.".mysqli_error($conn)."</p>";
        }
    }
?>
    <div class="cont1">
    <div class="cont1">
    <form class="lesInput" action="" method="POST">
        <label for="email">Nom :</label>
        <input class="champ" type="text" name="fname">
        <label for="email">Prenom :</label>
        <input class="champ" type="text" name="lname">
        <label for="email">Naissance :</label>
        <input class="champ" type="text" name="dateOfBirth">
        <label for="email">Pseudo :</label>
        <input class="champ" type="text" name="pseudo">
        <label for="email">Nom d'utilisateur :</label>
        <input class="champ" type="text" name="userName">
        <label for="email">E-Mail :</label>
        <input class="champ" type="text" name="email">
        <label for="psw">Mot de passe :</label>
        <input class="champ" type="password" name="psw">
        <div class="le_btn">
        <input class="btn" type="submit" value="Valider" name="btn-val">
        </div>
    </div>
    </form>
</section>
</body>
</html>