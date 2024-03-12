
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miims List</title>
    <link rel="stylesheet" href="TDL_style.css">
</head>
<body>
    <section id="sec1">
        <h1>miims list</h1>
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


        <div class="cont1">
            <form class="lesInput" action="" method="POST">
                <input id="inputT"type="text"placeholder="Ajouter une tâche ..."name="task">

                <button id="btnToDo" type="submit">+</button>
            </form>

        <ul id="toDoCont">
<?php
    $sql = "SELECT task FROM tasks";
    $result = mysqli_query($conn, $sql);
    
    // Créez un tableau pour stocker les tâches
    $tasks = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $tasks[] = $row;
    }
    
    foreach ($tasks as $task) {
        foreach ($task as $taske => $taskName) {
            echo '<li class="paraStyle">' . $taskName . '</li>';
        }
    }
    // exit;
?>
        </ul>

        </div>
    </section>
    <script src="TDL_script.js"></script>
</body>
</html>
