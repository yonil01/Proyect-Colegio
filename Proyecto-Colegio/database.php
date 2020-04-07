<?php
    $server='localhost';
    $username='root';
    $password='1234';
    $database='sistema_colegio';

    $connection = new mysqli($server, $username, $password, $database);

    if($connection->connect_error){
        die("Se produjo un error al conectar db: " . $connection->connect_error);
    }
?>

