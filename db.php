<?php
    $server = "db";
    $user = 'root';
    $password = 'root';
    $databaseName = 'crud_php';
    $port = 3306;
    try {
        $connection = new PDO("mysql:host=$server;dbname=$databaseName", $user, $password);         
    } catch (\Exception $exception) {        
        echo "Ocurrió un problema durante la conexión: ".$exception->getMessage();
    }
