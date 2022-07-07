<?php
    if(isset($_POST['submit'])) {
        require_once('./db.php');
        $title = $_POST['title'];
        $sql = "INSERT INTO tasks (title) VALUES ('$title')";
        $connection->exec($sql);       
    }
    
    header("Location: ./index.php");   
?>