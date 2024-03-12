<?php 
// var_dump($_SESSION);
session_start();
session_unset();
$title = "reset";
$nav = "reset";
require "navBar.php";
?>

<section id="sec-reset" style='height:80vh'>
    <h1 style=' font-size:55px'>Reset ALLLLLL</h1>
</section>
<?php 
require "footer.php";
?>