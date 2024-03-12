<?php 
$title = "Debug";
$nav = "debug";
require "navBar.php";
?>
<section id="sec-reset" style='height:80vh'>
    
    <p style='font-size:25px'>
        <?php
            var_dump($_SESSION)
        ?>
    </p>
</section>
<?php 
require "footer.php";
?>