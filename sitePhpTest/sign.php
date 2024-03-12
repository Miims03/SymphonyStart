<?php
$title = "Sign";
$nav = "sign";
require "navBar.php";

if(is_conn()):
    header('location: index.php');
else:
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
            <button>Valider</button>
        </form>
    </div>
</section>
<?php
endif;
require "footer.php";
?>