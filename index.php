<?php 
  try {
    require('./db.php');
    
    $sql = "SELECT * FROM tasks";
    $result = $connection->prepare($sql);
    $result->execute();
    $tasks = $result->fetchAll();

    } catch (\Exception $th) {
        echo "Ha ocurrido un error";
    }  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
</head>
<body>
    <h1>Crear tareas:</h1>

    <form action="createTask.php" method="post">
        <input type="text" name="title" id="id">
        <input type="submit" name="submit" value="Crear tarea">
    </form>
    <a href=""></a>
    <ul>
        <?php
            foreach ($tasks as $key => $task) {
                echo '<li>'.$task['title']."   ".'<button><a href="editTaskForm.php?id='.$task['id'].'">'.'Update Task'."</a></button>"."   ".'<button><a href="deleteTask.php?id='.$task['id'].'"">Delete task</a></button>'."</li>";
                
            }
        ?>
    </ul>    
</body>
</html>