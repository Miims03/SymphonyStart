<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        require_once 'functions/auth.php';
        require_once 'functions/functionsMath.php';
        session_start();
        if (isset($title)):
            echo $title;
        else:
            echo "Mon Beau Gosse de Site";
        endif;
        ?>
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <a href="index.php"><img src="icon/bannière-V2.svg"></a>
        <nav class='nav1'>
            <ul>
                <li><a href="index.php" class='<?php if ($nav === "index"):
                    echo 'active';
                endif; ?>'>Home</a></li>
                <li><a href="debug.php" class='<?php if ($nav === "debug"):
                    echo 'active';
                endif; ?>'>Debug</a></li>
                <li><a href="reset.php" class='<?php if ($nav === "reset"):
                    echo 'active';
                endif; ?>'>Reset</a>
                </li>

                <?php if (is_conn()): ?>
                    <li><a href="contact.php" class='<?php if ($nav === "contact"):
                        echo 'active';
                    endif; ?>'>Contact</a>
                    </li>
                    <li id='drop'>
                        <a href="#" class='<?php if ($nav === "add" || $nav === "mult" || $nav === "div" || $nav === "sous"):
                        echo 'active';
                    endif; ?>'>Calculatrice <ion-icon name="caret-down"></ion-icon></a>
                        <ul>
                            <li><a href="add.php" class='<?php if ($nav === "add"):
                                echo 'active';
                            endif; ?>'>Addition</a>
                            </li>
                            <li><a href="mult.php" class='<?php if ($nav === "mult"):
                                echo 'active';
                            endif; ?>'>Multiplication</a>
                            </li>
                            <li><a href="div.php" class='<?php if ($nav === "div"):
                                echo 'active';
                            endif; ?>'>Division</a>
                            </li>
                            <li><a href="sous.php" class='<?php if ($nav === "sous"):
                                echo 'active';
                            endif; ?>'>Soustraction</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            <?php endif; ?>
        </nav>
        <nav>
            <ul>
                <?php if (!is_conn()): ?>
                    <li><a href="login.php" class='<?php if ($nav === "login"):
                        echo 'active';
                    endif; ?>'>Login</a>
                    </li>
                <?php else: ?>
                    <li><a href="profil.php" class='<?php if ($nav === "profil"):
                        echo 'active';
                    endif; ?>'>Profil</a>
                    </li>
                    <li><a href="logout.php" class='<?php if ($nav === "logout"):
                        echo 'active';
                    endif; ?>'>Logout</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>