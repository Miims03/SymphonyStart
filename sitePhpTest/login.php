<?php 
$title = "Login";
$nav = "login";
require "navBar.php";

if(is_conn()):
    header('location: profil.php');
else:

$erreur = null;

if (!empty($_POST['username']) || !empty($_POST['password'])) :
    if ($_POST['username'] === "Miims" && $_POST['password'] === "1234") :
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['pdp'] = "icon/IMG_0528.png";
        $_SESSION['connected'] = true;
        header('location: profil.php');
    else :
        $erreur = "Identifiants incorrects !";
    endif;
endif;

if ($erreur) : ?>
    <div class="alert alert-danger">
        <?php echo $erreur ?>
    </div>
<?php endif;
endif;
?>
<section id="sec-log">
    <div class='part1'>
        <h1>Login</h1>
        <form action="login.php" method='POST'>
            <label for="username">Username</label>
            <input type="text" name="username">
            <label for="password">Password</label>
            <input type="password" name="password">
            <p>Toujours pas inscrits ? <a href="sign.php
            ">Inscritption</a></p>
            <button> Valider</button>
        </form>
    </div>
</section>
<?php 
require "footer.php";
?>