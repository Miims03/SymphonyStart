<?php

session_start();
require "header.php";
// require "functions/dblink.php";
require "dblink.php";
$title = "Login";
$nav = "login";

// Check if FORM is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username/email and password from the form
    if(isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];        
        // Validate username/email and password (One can add more validation)
        if (!empty($email) && !empty($password)) {
            // Prepare a SQL statement to check for the user in the database
            $select = "SELECT email, password FROM users WHERE email = :email AND password = :password";
            
            // Prepare statement
            $stmt = $pdo->prepare($select);
            
                // optional but good practice: Bind parameters for security reasons (avoid code injections) 
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $password);
            
            // Execute statement
            $stmt->execute();

            // Get result
            $result = $stmt->fetch(PDO::FETCH_OBJ); 

            
            // Check if there is a matching user (single?)
            if ($stmt->rowCount() == 1) {
                // User found, set session variables
                $_SESSION["connected"] = true;
                $_SESSION["email"] = $email;
                
                // prepare stm to add "1" (en vert) at the connected column at the users table ??? 
                
                // Redirect to the dashboard or any other page after successful login
                header("location: profile.php");
                exit; 

                // ALERT/WINDOWS TO DISPLAY ECHO MESSAGES ??? 

              } else {
                // Invalid username/email or password
                // $login_err1 = "Invalid username/email or password.";
                // echo $login_err1;
                ?>
                <script>
                alert ("1.Invalid email or password.")
                </script>
                <?php     
       }
            
        } else {
            // If username/email or password is empty
            // $login_err2 = "Please enter username/email and password.";
            // echo $login_err2;

?>
                <script>
                alert ("2.Email OR password not set.")
                </script>
<?php 
        }
    } else {
        // If email or password not set
        // $login_err3 = "Email or password not set.";
        // echo $login_err3;

?>
                <script>
                alert ("3.Email AND password not set.")
                </script>
<?php 
    }
}
?>

<!-- FORM ----------------------------------------- -->



<div class="form-login">
<table id="table-form-login">
  <tr>
    <th><h2>Login</h2></th>
  </tr>           
  <tr>       
    <td>
    <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="Your email">
        <br><br>
        <input type="password" name="password" placeholder="Your password">
        <br><br>
        <button id="btn-submit-form-login" type="submit">Login</button>
    </form>
    </td>
  </tr>
</table>
</div>

<br>



<?php require "footer.php"; ?>