<?php
  session_start();
  $email = $_SESSION['email'] ?? '';
  $title = "Profile creation";
  $nav = "signup";
  require "header.php";
  // require "functions/dblink.php";
  require "dblink.php";

  
  // Check if the form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST")  {
    // Initialize variables for step 2
  // $photo_user = '';    


  if (isset($_POST['firstname'], $_POST['lastname'], $_POST['pseudo'], $_POST['birthdate'], $_POST['id_city'])) {

    $firstname = $_POST['firstname'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $pseudo = $_POST['pseudo'] ?? '';
    $birthdate = $_POST['birthdate'] ?? '';
    $id_city_user = $_POST['id_city'] ?? null;

// VILLES: SELECTED FROM 10 CITIES WHERE VALUE HAS A NUMBER WHICH WILL BE SHOWN AT THE USERS TABLE _ FK 


    // Calculate age from date of birth
    $dob = new DateTime($birthdate);
    $now = new DateTime();
    $age = $dob->diff($now)->y; 

        
    try {
    $req = $pdo->prepare("UPDATE users SET 
      firstname = '".$_POST['firstname']."', 
      lastname = '".$_POST['lastname']."', 
      pseudo = '".$_POST['pseudo']."',
      birthdate = '".$_POST['birthdate']."', 
      age = '".$age."',
      id_city_user = '".$_POST['id_city']."' 

      WHERE email = '".$email."'
    ");


    // $req->bindParam(':firstname', $_POST['firstname']);
    // $req->bindParam(':lastname', $_POST['lastname']);
    // $req->bindParam(':pseudo', $_POST['pseudo']);
    // $req->bindParam(':birthdate', $_POST['birthdate']);

    $req->execute();

  } catch (PDOException $e) {
    echo "Error: xxxxxxxxx" . $e->getMessage();
  }           

    ?>
      <script>
      alert ("Your profile has been created. Check it out! ")
      </script>
      
    <?php 

     // Redirect user
     header('Location: profile.php'); 
     exit(); 
  
}
  }

     

?>

<!-- FORM ------------------------------------------------------------  -->

<div id="form-register2">
<table id="table-form-register2">
  <tr>
    <th><h2>Registration/Step2</h2></th>
  </tr>           
  <tr>       
    <td>
      <form action="/php/siteblog/register2.php" method="POST">
        
        <label for="firstname">Firstname: </label><br>        
        <input type="text" name="firstname" placeholder="First name" required>
        <br><br>

        <label for="lastname">Lastname: </label><br>
        <input type="text" name="lastname" placeholder="Family name" required>
        <br><br>

        <label for="pseudo">Public name: </label><br>
        <input type="text" name="pseudo" placeholder="Pseudo" required>
        <br><br>

        <!-- This input field returns the date in the format "YYYY-MM-DD" by default. -->
        <label for="birthdate">Date of Birth: </label><br>
        <input type="date" name="birthdate" placeholder="My aniversary is:" required>
        <br><br> 


        <label for="city">City you were born: </label><br>
        <select name="id_city" id="city">
        <option value="">Select City</option>
        
            <?php
            // Fetch cities from the database
            // require "dblink.php"; // Include your database connection file
            $query = "SELECT id_city, city_user FROM cities";
            $result = $pdo->query($query);
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='" . $row['id_city'] . "'>" . $row['city_user'] . "</option>";
            }
            ?>

        </select>
        <br><br>

 
        <button id="btn-submit-form-register2" type="submit">Create Profile</button>
      </form>

    </td>
  </tr>
</table>
</div>

<br>


<!-- FOOTER -->
<?php
require "footer.php";
?>