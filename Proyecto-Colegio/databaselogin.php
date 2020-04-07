<?php
    $server = 'localhost';
    $usuario = 'root';
    $password = '1234';
    $database = 'usuarios';

    $connectionsql = new mysqli($server,$usuario,$password,$database);

    if($connectionsql->connect_error){
        die("Se produjo un error al conenectar en: " . $connectionsql->connection_error);
    }
        
    
?>