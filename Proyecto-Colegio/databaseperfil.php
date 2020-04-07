<?php
    $server ='localhost';
    $user = 'root';
    $password = '1234';
    $database = 'foto_usuario';

    $connection = new mysqli($server, $user, $password, $database);
    if($connection->connect_error){
        die("Se produjo error al conectar:  " . $connection->connect_error);
    }
?>