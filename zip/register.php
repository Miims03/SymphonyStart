<?php
session_start();
$_SESSION["register"] = true;
$title = "Register";
$nav = "register";
require "header.php";
// require "functions/dblink.php";
require "dblink.php";

 
// Initialize variables
$photo_user = '';    
$firstname = '';
$lastname = '';
$pseudo = '';
$birthdate = '';
$age = '';
$email = $_POST['email'] ?? '';
$_SESSION['email'] = $email;
$password = $_POST['password'] ?? '';
$_SESSION['password'] = $password;
$entry_date = date('Y-m-d H:i:s'); 
$_SESSION['entry_date'] = $entry_date;
$connection = true;

if (!empty($email) && !empty($password)) {
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
        // $erreur = "Invalid email format.";
        ?>
        <script>
        alert ("Invalid email format.")
        </script>
        <?php 

    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Check if email already exists
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
        $stmt->execute([$email]);
          if ($stmt->fetchColumn() > 0) {
            // $erreur = "Email already exists.";

            ?>
                <script>
                alert ("Email already exists.")
                </script>
            <?php 
            
          } else {
          // Insert data into the database
          $req = $pdo->prepare('INSERT INTO users VALUES (:id_user, :photo_user,  :firstname,  :lastname, :pseudo,  :birthdate,  :age,  :email, :password, :entry_date,  :connection )');
          $req->execute(array(
            'id_user' => NULL, 
            'photo_user' => $photo_user,    
            'firstname' => $firstname, 
            'lastname' => $lastname,
            'pseudo' => $pseudo,
            'birthdate' => $birthdate,
            'age' => $age,
            'email' => $email,
            'password' => $password,
            'entry_date' => $entry_date, 
            'connection' => $connection,
          
          )
        
        )  
        
        ?>
        <script>
        alert ("Step1 was a success!")
        </script>
        
      <?php 
        
            // Redirect user
            header('location: register2.php');
            exit();
        }
    }
}

// Display error message if there is one
if (isset($erreur)) {
    // echo "<div class='alert'>$erreur</div>";
    ?>
    <script>
    alert ("Something went wrong. Please try again.")
    </script>
    <?php 
}
?>


<!-- FORM --------------------------------------------------------------------- -->

    <div id="form-register1">
        <table id="table-form-register1">
            <tr>
                <th><h2>Registration/Step 1</h2></th>
            </tr>           
            <tr>       
                <td>
                    <form action="register.php" method="POST">
                        <label for="login">Email: </label><br>
                        <input type="email" name="email" placeholder="Your email" required><br><br>
                        <label for="password">Password: </label><br>
                        <input type="password" name="password" placeholder="Your password" required><br><br>
                        <button id="btn-submit-form-register" type="submit">Register Now</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>

<!-- FOOTER -->
<?php require "footer.php"; ?>
