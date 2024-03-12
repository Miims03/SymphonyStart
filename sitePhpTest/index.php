<?php 
$title = "Home";
$nav = "index";
require "navBar.php";
?>
<section id="sec1">
    <div class="part1">
        <h1>CONTENTS</h1>
        <h1 style="font-size:30px;">
            CONTENTS
        </h1>
        <?php if(isset($_SESSION['email']) && isset($_SESSION['name'])): ?>
        <div class = 'lestables'>
            <table style='border-right: 1.5px solid #550004;margin: 0 0 0 1rem;'>
                <thead>
                    <th>
                        Name
                    </th>
                </thead>
                <tbody>
                    <?php 
                        foreach($_SESSION['name'] as $name){ 
                    ?>
                    <tr>
                    <td><?php echo $name; ?></td>
                    <tr>        
                    <?php 
                        };
                    ?>
                    </tbody>
            </table>
            <table style='border-left: 1.5px solid #550004;margin: 0 1rem 0 0;'>
                <thead>
                    <th>
                        Email
                    </th>
                </thead>
                <tbody>
                    <?php 
                        foreach($_SESSION['email'] as $email){
                    ?>
                    <tr>
                    <td><?php echo $email; ?></td>
                    <tr>        
                    <?php 
                        };
                    endif;
                    ?>
                    </tbody>
            </table> 
        </div>
    </div>
    <div class="part2">
        <h1>Home</h1>
        <img src="icon/erza.png">
    </div>
    <div class="part3">
        <h1>Erza Scarlett</h1>
        <p>Franchement elle est fraîchement fraîche <span>ma FEMME <3</span> </p>
    </div>
</section>

<?php 
require "footer.php";
?>

