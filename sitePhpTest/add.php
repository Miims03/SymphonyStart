<?php
session_start();
$title = "Addition";
$nav = "add";
require "navBar.php";

if (!is_conn()):
    header('location: login.php');
else:

    ?>

    <section id="sec-contact" style='height:77vh'>
        <div class="part1">
            <h1>Addition</h1>
            <form action="add.php" method='POST'>
                <input type="float" name="num1" placeholder="Numéro 1">
                <h2>+</h2>
                <input type="float" name="num2" placeholder="Numéro 2">
                <h2>=</h2>
                <p>
                    <?php
                    if (isset($_POST['num1']) && isset($_POST['num2'])):
                        if (!empty($_POST['num1']) && !empty($_POST['num2'])) {
                            $_SESSION['numAdd1'] = $_POST['num1'];
                            $_SESSION['numAdd2'] = $_POST['num2'];

                            if (!isset($_SESSION['num1'])) {
                                $_SESSION['num1'] = [];
                            }
                            array_push($_SESSION['num1'], $_POST['num1']);

                            if (!isset($_SESSION['num2'])) {
                                $_SESSION['num2'] = [];
                            }
                            array_push($_SESSION['num2'], $_POST['num2']);

                            $_SESSION['repAdd'] = add($_POST['num1'], $_POST['num2']);

                            if (!isset($_SESSION['numOp'])) {
                                $_SESSION['numOp'] = [];
                            }
                            if ($_SESSION['repAdd'] !== NULL) {
                                if (!isset($_SESSION['nameOp'])) {
                                    $_SESSION['nameOp'] = [];
                                }
                                array_push($_SESSION['nameOp'], 'Addition');
                                array_push($_SESSION['numOp'], $_SESSION['repAdd']);
                            }
                        }
                    endif;
                    ?>
                </p>
                <button type="submit">Additionner</button>
            </form>
        </div>
    </section>
    <?php
endif;
require "footer.php";
?>