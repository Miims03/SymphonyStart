<?php

    include_once './TDL_conn.php';

    if(isset ($_GET['id'])){
        $sql = "DELETE FROM tasks WHERE id= ".$_GET['id']."";
        $result = mysqli_query($conn, $sql);
        header("location:TDL_html.php");

    };

?>