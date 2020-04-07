<?php
    session_start();
    $opcion = "";
    $codigo="";
    
    //generar aleatorio
    

    
        for($i=0;$i<6;$i++){
            $num = rand(0,9); 
            $codigo=$codigo . $num;
        }
       

    $_SESSION['codi']=$codigo;
    
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Academico</title>
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="css/style-imagen.css">
</head>
<body class="hiddden">
    <!--<div class="centrado" id="onload">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div> -->

    <header id="desplazar">
           <nav class="nav1" id='nav'>
            <div class="textos">
                <h1>Colegio Nacional Ramon Castilla</h1>   
            </div> 
           </nav>
        </header>
    <main>
        <section class="team contenedor" id="principal">
            <div class="caja" >
                <div class="sub-titulo">
                    <h3>Iniciar Secion</h3>
                    <p>Sistema Academico de Gestion</p>
                </div>
                <form action="verificar.php" class="caja2" method="POST">
                    <div class="caj user"> 
                        <i class="icon-user"></i>
                        <input type="text" name="usuario" placeholder="Usuario">  
                    </div>
                    <div class="caj pass">
                        <i class="icon-pass"></i>
                        <input type="password" name="contraseña" placeholder="Contraseña">
                    </div>

                        <select name="opcion" id="" class="caj option">
                            <option value="" >Selecciona</option>
                            <option value="alum" <?php if($opcion=="alum"){ echo "selected";} ?> >Alumno</option>
                            <option value="docen"  <?php if($opcion=="docen"){ echo "selected";} ?>>Docente</option>
                            <option value="traba" <?php if($opcion=="traba"){ echo "selected";} ?>>Trabajadores</option>
                            <option value="direc" <?php if($opcion=="direc"){ echo "selected";} ?>>Director</option>
                        </select>
                   
                        
                  
                    <div class="caj cod">
                    <p class="codigo" id="codigo"><?php echo $codigo?></p>        
                    </div>


                    <div class="caj verficacion">
                    <input type="text" name="codigo" placeholder="Codigo de Verificacion">
                    </div>

                    <div class="caj btn">
                    <input type="submit" value="Ingresar">
                        </div>
                    <div >
                        <p class="message" style="color: red; width: 80%;
                        margin: 30px auto; font-size: 18px;"><?php if(isset($_SESSION['message'])){
                            echo "." . $_SESSION['message']; session_destroy();}else{
                                echo "";
                            }?></p>

                    </div>
                </form>
                
            </div>
        </section>
        <footer class="footer">
            <div class="icono">
                <a href="https://www.twitter.com" class="icon-twitter"></a>
                <a href="https://www.facebook.com" class="icon-facebook"></a>
                <a href="https://www.github.com" class="icon-github"></a>
                <a href="https://accounts.google.com/ServiceLogin/signinchooser?elo=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="icon-gplus"></a>
            </div>
            <p class="copy">Colegio Nacional &copy; 2020 - Tingo Maria</p>
        </footer>
    </main>      
</body>
</html>