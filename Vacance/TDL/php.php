<?php
    $conn = mysqli_connect("localhost", "root", "", "todolist");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $task = $_POST['task'];
        $task = mysqli_real_escape_string($conn, $task);
        $sql = "INSERT INTO tasks (task, complet) VALUES ('$task', 0)";
        if (mysqli_query($conn, $sql)) {
            echo "<p class='succes'>Tâche ajoutée avec succès</p>";
        } else {
            echo "<p class='error'>Erreur lors de l'ajout de la tâche : " . mysqli_error($conn) . "</p>";
        }
    }

?>

<?php
    $sql = "SELECT * FROM tasks";
    $result = mysqli_query($conn, $sql);
    
    // Créez un tableau pour stocker les tâches
    $tasks = array();
    while ($row = mysqli_fetch_assoc($result)) { 
        $tasks[] = $row;
    }
    
    foreach ($tasks as $task) {
        foreach ($task as $taske => $taskName) {
            if($taskName != ""){
            echo '<li class="paraStyle">' . json_encode($tasks) . '</li>';
            }
        }
    }
?>