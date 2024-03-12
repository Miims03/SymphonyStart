<?php
 
  session_start();
  $email = $_SESSION['email'] ?? '';
  $title = "My Profile";
  $nav = "profile";
  require "header.php";
  // require "functions/dblink.php";
  require "dblink.php";
 
  if (!is_connected()) {
    //redirection
    header('Location: /php/siteblog/login.php'); 
  }

// PROFILE----------------------------------------------------------------------------------
// STEP1 

// Function age
function calculateAge($birthdate) {
  $birthdate2 = new DateTime($birthdate); 
  $currentDate = new DateTime();
  return $birthdate2->diff($currentDate)->y;
  }

try {
  $resultat = $pdo->query('SELECT users.*, cities.nationality
  FROM users
  INNER JOIN cities ON users.id_city_user = cities.id_city
  WHERE email = "'.$email.'" '); 

    foreach($resultat->fetchAll(PDO::FETCH_OBJ) as $req){ 
?>

<div class="structure_all_info">

  <div class="profile">
    <img src="" alt="">
      
    <form action="profile.php" method="POST" id="updateform">
        
      
      <p id="userid">ID: <?php echo "$req->id_user" ?></p>
      
     
       
      <p>Pseudo: <br> <input type="text" name="pseudo" value="<?php echo "$req->pseudo" ?>" required></p>
      
      <p>Firstname: <br> <input type="text" name="firstname" value="<?php echo "$req->firstname" ?>" required></p>
      
      <p>Lastname: <br> <input type="text" name="lastname" value="<?php echo "$req->lastname" ?>" required></p>

      <p>Birthdate: <br> <input type="text" name="birthdate" value="<?php echo "$req->birthdate" ?>" required></p>

      <p>Age: <br> <input type="text" name="age" value="<?php echo calculateAge("$req->birthdate") ?>" readonly></p> 

      <p>Email: <br> <input type="email" name="email" value="<?php echo "$req->email" ?>" required></p>

      <p>Member since: <br> <input type="date" name="entry_date" value="<?php echo "$req->entry_date" ?>" disabled></p>

<!-- city_user -->
  
      <p>Nationality: <br> <input type="text" name="nationality" value="<?php echo "$req->nationality" ?>" disabled></p>

    <button type="submit" id="button_update">UPDATE</button>

    </form>

  </div>
 
  
  <?php    }
      } catch (PDOException $e){
        die('Erreur : YOU GOT AN ERROR IN THE PROFILE'. $e->getMessage());
      }
    ?>

  <!-- STEP2  ----------------------------------------------------- -->

<?php



try{
  if (isset($_POST['pseudo'], $_POST['firstname'], $_POST['lastname'], $_POST['birthdate'], $_POST['age'], $_POST['email'], $_POST['entry_date'], $_POST['nationality'])) {
    $id_user = $_SESSION['id_user'];
    // $id_user = $_POST['id_user'];
    // Debug statement to check the value of $id_user
    echo "User ID: " . $id_user . "<br>";
 
  // Recalculate age based on the new date of birth as we can not use the session cause the age is not automacally calculated and included in the field
  $age = calculateAge($_POST['birthdate']);

  $req = $pdo->query("UPDATE users SET pseudo = '".$_POST['pseudo']."',firstname = '".$_POST['firstname']."', lastname = '".$_POST['lastname']."', birthdate = '".$_POST['birthdate']."',age = '".$age."', email = '".$_POST['email']."', entry_date = '".$_POST['entry_date']."', nationality = '".$_POST['nationality']."' WHERE id_user = '".$id_user."' "
  ); 
  
  // $req->execute();

  echo "Profile updated ! <br>";
  }

  } catch (PDOException $e){
  echo "Erreur : Profile could not be entirely updated " . $e->getMessage();
  }                              
  ?>


  <!-- BLOGS---------------------------------------------------------------------------------- -->


<?php 
try {
$resultat = $pdo->query('SELECT blogs.*, users.lastname
FROM blogs
INNER JOIN users ON users.id_user = id_user_blog  
WHERE email = "'.$email.'"   ;' ); 

      foreach($resultat->fetchAll(PDO::FETCH_OBJ) as $req){ 
?>  

  <div class="blogs">
    <div id="blog">
      <div class="image">
          <img src="images/phplogo.png" alt=""> 
      </div>

      <div class="publication">
          <h2 id="title"><?php echo "$req->title" ?></h2>
          <p id="content"><?php echo "$req->content" ?></p>
          <p id="publication_date"><?php echo "$req->date_published" ?></p>
          <p id="author"><?php echo "$req->lastname" ?></p>
          
          <?php }
          } catch (PDOException $e){
          die('Erreur : YOU GOT AN ERROR'. $e->getMessage());
          }
          ?>
      </div>

      
    </div>    
  </div>

</div>

     
