<?php
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        require_once('./db.php');

        $sql = "SELECT * FROM tasks WHERE (id = $id)";

        $result = $connection->prepare($sql);
        $result->execute();

        $task = $result->fetch(PDO::FETCH_OBJ);

        if(!$task) {
            echo "no existe la tarea";
            exit;
        }     
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="updateTask.php" method="post">
        <input type="hidden" name="id" value="<?php echo $task->id ?>">
        <input type="text" name="title" value="<?php echo $task->title ?>">
        <input type="submit" value="Actualizar tarea" name="submit">
    </form>
</body>
</html>