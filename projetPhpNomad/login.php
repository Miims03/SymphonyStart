<?php
$titre = 'Login';
$nav = 'login';
require 'header.php';
if (is_connected()) {
    echo '<script> location.replace("profil.php"); </script>';
} else {
?>


<section id='base'>
    <h1>Login</h1>
<?php 
$failCon = null;
$champVide = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
        $request = $pdo->query('SELECT pseudo FROM users');
        $display = $request->fetchAll(PDO::FETCH_OBJ);
        if (sizeof($display) > 0) {
            foreach ($display as $elem) {
                if ($_POST['pseudo'] == $elem->pseudo) {
                    $request = $pdo->query('SELECT id_user,password FROM users WHERE pseudo ="' . $_POST['pseudo'] . '"');
                    $display = $request->fetchAll(PDO::FETCH_OBJ);
                    foreach ($display as $elem) {
                        if ($_POST['password'] == $elem->password) {
                            $_SESSION['user_id'] = $elem->id_user;
                            $_SESSION['pseudo'] = $_POST['pseudo'];
                            $_SESSION['connected'] = true;

                            header('location: index.php');
                            exit;
                        } else {
                            $failCon = '<h2 style="color:red;font-size:20px">Pseudo ou mot de passe incorrect</h2>';
                        }
                    }
                } else {
                    $failCon = '<h2 style="color:red;font-size:20px">Pseudo ou mot de passe incorrect</h2>';
                }
            }
        } else {
            $failCon = '<h2 style="color:red;font-size:20px">Pseudo ou mot de passe incorrect</h2>';
        }
    } else {
        $champVide = '<h2 style="color:red;font-size:20px">Ne pas laisser les champs vides</h2>';
    }
}

if ($champVide) {
    echo $champVide;
}
if ($failCon) {
    echo $failCon;
}
?>
    <form action="login.php" method='POST'>

        <label for="pseudo">Pseudo</label>
        <input type="text" name='pseudo'>

        <label for="password"> Password</label>
        <input type="password" name='password'>

        <button type='submit'>Se connecter</button> 
    </form>
</section>
<?php
}
require 'footer.php';
?>