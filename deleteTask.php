<?php

    if(isset($_GET['id'])) {
        $idTask = $_GET['id'];

        require_once('./db.php');

        $sql = "DELETE FROM tasks WHERE id = '$idTask'";

        // $sentencia = $connection->prepare($sql);
        // $sentencia->execute();

        $connection->exec($sql);

        header('location: ./index.php');

    }