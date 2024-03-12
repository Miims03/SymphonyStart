<?php
$title = "profil";
$nav = "profil";
require "navBar.php";
?>

<?php 
if(!is_conn()):
    header('location: login.php');
else:
?>
<section id="sec-reset" style='gap:1rem;padding:2rem'>

<img style='width:250px;height:250px;border-radius:50%' src="icon/IMG_0528.png">
    <h1 style=' font-size:55px'>Bienvenu <?php echo $_SESSION['username']; ?></h1>
    <h2><?php if(isset($_SESSION['numOp'])){
            echo 'Vous avez 
            fait '.count($_SESSION['numOp']).' opérations mathématiques.';
        }
    ?></h2>
    <p><?php
        if(isset($_SESSION['repAdd'])){
            echo 'Votre dernière Addition : '.$_SESSION['numAdd1'].' + '.$_SESSION['numAdd2'].' = '.$_SESSION['repAdd'];
        }
    ?></p>
    <p><?php
        if(isset($_SESSION['repSous'])){
            echo 'Votre dernière Soustraction : '.$_SESSION['numSous1'].' - '.$_SESSION['numSous2'].' = '.$_SESSION['repSous'];
        }
    ?></p>
    <p><?php
        if(isset($_SESSION['repMult'])){
            echo 'Votre dernière Multiplication : '.$_SESSION['numMult1'].' x '.$_SESSION['numMult2'].' = '.$_SESSION['repMult'];
        }
    ?></p>
    <p><?php
        if(isset($_SESSION['repDiv'])){
            echo 'Votre dernière Division : '.$_SESSION['numDiv1'].' : '.$_SESSION['numDiv2'].' = '.$_SESSION['repDiv'];
        }
    ?></p>
    <?php if(isset($_SESSION['nameOp'])): ?>
        <div class = 'lestables' style="width:70%">
            <table style='margin: 0 0 0 0;'>
                <thead>
                    <th>
                        Opération
                    </th>
                </thead>
                <tbody>
                    <?php 
                        foreach($_SESSION['nameOp'] as $name){ 
                    ?>
                    <tr>
                    <td><?php echo $name; ?></td>
                    <tr>        
                    <?php 
                        };
                    ?>
                    </tbody>
            </table>
            <table style='margin: 0 0 0 0;'>
                <thead>
                    <th>
                        Numéro 1
                    </th>
                </thead>
                <tbody>
                    <?php 
                        foreach($_SESSION['num1'] as $numAdd1){
                    ?>
                    <tr>
                    <td><?php echo $numAdd1; ?></td>
                    <tr>        
                    <?php 
                        };
                    ?>
                    </tbody>
            </table>
            <table style='margin: 0 0 0 0;'>
                <thead>
                    <th>
                        Numéro 2
                    </th>
                </thead>
                <tbody>
                    <?php 
                        foreach($_SESSION['num2'] as $numAdd2){
                    ?>
                    <tr>
                    <td><?php echo $numAdd2; ?></td>
                    <tr>        
                    <?php 
                        };
                    ?>
                    </tbody>
            </table>
            <table style='margin: 0 0 0 0;'>
                <thead>
                    <th>
                        Résultat
                    </th>
                </thead>
                <tbody>
                    <?php 
                        foreach($_SESSION['numOp'] as $respAdd){
                    ?>
                    <tr>
                    <td><?php echo $respAdd; ?></td>
                    <tr>        
                    <?php 
                        };
                    endif;
                    ?>
                    </tbody>
            </table> 
        </div>
</section>
<?php 
endif;
require "footer.php";
?>