<?php

    if($_POST['submit']) {
        $title = $_POST['title'];
        $idTask = $_POST['id'];

        require_once('./db.php');

        $sql = "UPDATE tasks SET title = '$title' WHERE id = '$idTask'";
        $connection->exec($sql);

    }

    header("Location: ./index.php");   
?>