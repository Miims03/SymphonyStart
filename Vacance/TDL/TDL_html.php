<?php
    include_once './TDL_conn.php';
?>           

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
<?php  //VALIDATION 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $task = $_POST['task'];
        $task = mysqli_real_escape_string($conn, $task);
        if(!empty($task)){
        
            $sql = "INSERT INTO tasks (task, complet) VALUES ('$task', 0)";
            mysqli_query($conn, $sql);

            echo "<p class='succes'>Tâche ajoutée avec succès</p>";

        }else{
            echo "<p class='error'>Erreur lors de l'ajout de la tâche." . mysqli_error($conn) . "</p>";
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
        $sql = "SELECT * FROM tasks";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) {
            echo '<li class="paraStyle">';
            echo '<p class="paraStyle_test">'.$row["task"].'</p>';
            echo '<a id="btnToDoDell" href="./TDL_BtnSupp.php?id='.$row["id"].'">-</a>';
            echo '</li>';
        }
        
?>
            </ul>
        </div>  
    </section>
    <script src="new.js"></script>

</body>
</html>
