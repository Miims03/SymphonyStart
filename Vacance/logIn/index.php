<?php 
        include_once './conn.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // $userName = $_POST['userName'];
            // $email = $_POST['email'];

            $email_userName = $_POST['email_userName'];


            $psw = $_POST['psw'];
            $erreur = '';
 
            $sql = "SELECT * FROM login WHERE userName ='$email_userName' OR email = '$email_userName' AND psw = '$psw' ";
            $result = mysqli_query($conn, $sql);
            $n_line =  mysqli_num_rows($result);

            if ($n_line > 0) {
                header("Location: http://localhost/php/Vacance/TDL/TDL_html.php");
            }else{
                $erreur = 'Adresse email / Nom d\'utilisateur ou mot de passe invalide.';
            }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section id="sec1">
    <!-- <div class="connexion"> -->
    <h1>Connexion</h1>
    <?php 
        if(isset($erreur))
        echo "<p class='erreur'>".$erreur."</p>";
    ?>
    <div class="cont1">
    <form class="lesInput" action="" method="POST">
        <label for="email">Nom d'utilisateur / email :</label>
        <input class="champ" type="text" name="email_userName">
        <label for="psw">Mot de passe :</label>
        <input class="champ" type="password" name="psw">
        <p>Toujours pas incrits ? <a href="sign.php">Inscits toi ici</a></p>
        <div class="le_btn">
        <input class="btn" type="submit" value="Valider" name="btn-val">
        </div>
    </div>
    </form>
    <!-- </div> -->
    </section>
</body>
</html>



