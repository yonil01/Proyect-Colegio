<?php
session_start();
    $indice_grado=0;
    if(isset($_SESSION['dni'])){
        $dni = $_SESSION['dni'];
        
        require 'clases.php';
        $alum = Buscar_Alumno($dni);
        $_SESSION['apellido_nombre']=ucfirst($alum->getApellidop()) . "  " . ucfirst($alum->getApellidom()) . "  " . ucfirst($alum->getNombre());
        
        //connection for photo
        require 'databaseperfil.php';
       
        $consult = "SELECT * FROM imagen WHERE dni=$dni";
        $result = $connection->query($consult);
        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
                $code_image=$row['foto'];
            }
        }
        require 'menu_alumno.php';
        
        
        
    }else{
        header('location: index.php');
    }

?>
