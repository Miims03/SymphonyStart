<?php 
$title = "Contact";
$nav = "contact";
require "navBar.php";

if(!is_conn()):
    header('location: login.php');
else:

    if(isset($_POST['email']) && isset($_POST['name'])):
      
        if (!isset($_SESSION['email'])) {
            $_SESSION['email'] = [];
        }
        array_push($_SESSION['email'],$_POST['email']);
        
        if (!isset($_SESSION['name'])) {
            $_SESSION['name'] = [];
        }
        array_push($_SESSION['name'],$_POST['name']);
    else:
        $err = "Veuillez remplir les champs !";
    endif;
?>
        

<section id="sec-contact" style='height:77vh'>
    <div class="part1">
        <h1>Contact</h1>    
        <form action="contact.php" method="POST">
            <label for="name">Entrez votre nom</label>
            <input type="text" name="name">
            <label for="email">Entrez votre mail</label>
            <input type="email" name="email">
            <button>Contactez Nous</button>
        </form>
    </div>
    
    
</section>
<?php 

endif;
require "footer.php";
?>