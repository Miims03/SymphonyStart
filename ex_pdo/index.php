<?php 
if ($_SERVER["REQUEST_METHOD"] == 'POST') { 
    if (isset($_POST['pseudo'])) {
        try {
            $pdo = new PDO('mysql:dbname=projetphp;host=localhost','root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $req = $pdo->query('SELECT user_id,pseudo FROM users WHERE pseudo = "'.$_POST['pseudo'].'"');
            $aff = $req->fetchAll(PDO::FETCH_OBJ);
            foreach ($aff as $elem) {
                if ($_POST['pseudo'] == $elem->pseudo) {
                    echo $elem->user_id.'<br>';
                    echo $elem->pseudo.'<br>';
                    $_SESSION['user_id'] = $elem->user_id;
                    $_SESSION['pseudo'] = $elem->pseudo;
                    $_SESSION['connected'] = true;
                    echo 'session id = '.$_SESSION['user_id'].'<br>';
                    
                }
            }
        } catch (PDOException $error) {
            die('Erreur : '.$error->getMessage());
        }     
    }
}
?>
<form action="index.php" method="POST">
    <!-- <select name="pays" id="pays">
        <option value="Belgique">Belgique</option>
        <option value="Maroc">Maroc</option>
    </select> -->
    <input type="text" name='pseudo' placeholder="pseudo">
    <button type="submit">OK</button>
</form>

<a href='logout.php'>reset</a>
<?php 
    var_dump($_SESSION);
    // var_dump($aff);
    
?>