<?php
session_start();
$title = "Soustraction";
$nav = "sous";
require "navBar.php";

if (!is_conn()):
    header('location: login.php');
else:
    ?>

    <section id="sec-contact" style='height:77vh'>
        <div class="part1">
            <h1>Soustraction</h1>
            <form action="sous.php" method='POST'>
                <input type="float" name="num1" placeholder="Numéro 1">
                <h2>-</h2>
                <input type="float" name="num2" placeholder="Numéro 2">
                <h2>=</h2>
                <p>
                <?php
                    if (isset($_POST['num1']) && isset($_POST['num2'])):
                        if (!empty($_POST['num1']) && !empty($_POST['num2'])) {
                        $_SESSION['numSous1'] = $_POST['num1'];
                        $_SESSION['numSous2'] = $_POST['num2'];

                        if (!isset($_SESSION['num1'])) {
                            $_SESSION['num1'] = [];
                        }
                        array_push($_SESSION['num1'], $_POST['num1']);

                        if (!isset($_SESSION['num2'])) {
                            $_SESSION['num2'] = [];
                        }
                        array_push($_SESSION['num2'], $_POST['num2']);

                        $_SESSION['repSous'] = sous($_POST['num1'], $_POST['num2']);
                        
                        if (!isset($_SESSION['numOp'])) {
                            $_SESSION['numOp'] = [];
                        }
                        if ($_SESSION['repSous'] !== NULL) {
                            if (!isset($_SESSION['nameOp'])) {
                                $_SESSION['nameOp'] = [];
                            }
                        array_push($_SESSION['nameOp'], 'Soustraction');
                        array_push($_SESSION['numOp'], $_SESSION['repSous']);
                        }
                    }
                    endif;
                    ?>
                </p>
                <button type="submit">Soustraire</button>
            </form>
        </div>
    </section>
    <?php
endif;
require "footer.php";
?>