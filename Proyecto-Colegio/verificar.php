<?php

require 'database.php';
    require 'databaselogin.php';
    $message='';
    $opcion = "";
    
session_start();

if(!empty($_POST['usuario']) && !empty($_POST['contraseña'])){
    $user = $_POST['usuario'];
    $password = $_POST['contraseña'];

    if($_POST['opcion']){
        
        if(!empty($_POST['codigo']) && $_SESSION['codi']==$_POST['codigo']){
            if($_POST['opcion']=="alum"){
                $sql = "SELECT * FROM registro WHERE usuario='$user' and password = '$password'";
                $result = $connectionsql->query($sql);

                if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $_SESSION['dni']= $row['dni_user'];
                }
                $dni = $_SESSION['dni'];
                    header("location: menu.php?=$dni");

                }else{
                    $message = "Usuario o Constraseña Incorrecto";
                        retornar();
                    }
            }
             
            if($_POST['opcion']=="direc"){
                
                $sql = "SELECT * FROM user_direct WHERE dni_user=$user and password = '$password'";
                $result = $connectionsql->query($sql);

                if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $_SESSION['dni']= $row['dni_user'];
                }
                $dni = $_SESSION['dni'];
                if($dni==12345){
                    header("location: menuPrivado.php?=$dni");
                }else{
                    header("location: menuDirector.php?=$dni");
                }
                

                }else{
                    $message = "Usuario o Constraseña Incorrecto";
                        retornar();
                    }
            }

        }else{
            $message = "Codigo de Verificacion Incorrecto!!";
            retornar();
        }
        
    }else{
        $message = "No seleccionaste la opcion";
            retornar();
    }
}else{
    $message = "Ingresa el usuario y la Contraseña!";
        retornar();
}

function retornar(){
    header('Location: index.php');
}

$_SESSION['message']=$message;
     
?>