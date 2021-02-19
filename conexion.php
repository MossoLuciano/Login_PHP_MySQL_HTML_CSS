<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'bancomax';

    try{
        $conexion = new PDO("mysql:host=$host;dbname=$database;", $user, $pass);
    }catch(PDOException $ex){
        echo "<strong>Error de conexion</strong>" . $ex->getMessage();
    }

?>