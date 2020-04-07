
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" href="css/style-imagen.css">
    <title>Menu</title>
</head>
<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    <header class="entrada">
        <nav class="nav1" id="desplazar">
            <div class="contenido">
                
                    <div class="Nombre" style="width: 30%;">
                        <h3><?php echo $_SESSION['apellido_nombre']?></h3>
                    </div>
                    <div class="imagen-perfil">
                        <img class="img1" src="data:image/jpg;base64,<?php echo  base64_encode($code_image)?>">
                    </div>
                    <div class="almoadilla">
                        <span>&#9776;</span>
                    </div>
            </div>
        </nav>
        <div class="cabecera">
            <div class="contenido-principal">
                <div class="contenido">
                    <ul class="imagenes1">
                    <li class="img1"></li>
                    <li class="img2"> </li>
                    <li class="img3"></li>
                    </ul>
                    <ul class="imagenes2">
                        <li class="img1"></li>
                        <li class="img2"> </li>
                        <li class="img3"></li>
                        </ul>
                        <ul class="imagenes3">
                            <li class="img1"></li>
                            <li class="img2"> </li>
                            <li class="img3"></li>
                            </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
       
        <section class="principal">
            <nav class="columna">
                <ul>
                   
                    <li id="btn-inicio" value="Inicio" onclick="funPrincipal(this.id)">Inicio</li>
                    <li id="btn-cursos" value="Ocultar" onclick="funPrincipal(this.id)">Cursos Matriculados</li>
                    <li id="btn-horario" value="Horario" onclick="funPrincipal(this.id)">Horario</li>
                    <li id="btn-silabos" value="Siabos" onclick="funPrincipal(this.id)">Silabos</li>
                    <li id="btn-parciales" value="Parciales" onclick="funPrincipal(this.id)">Notas Parciales</li>
                    <li id="btn-notas" value="Notas" onclick="funPrincipal(this.id)">Registro de Notas</li>
                </ul>
            </nav>
            <section class="contedido-principal">
            <section class="centrado1" id="centrado1">
                    <div class="carga"></div>      
            </section>

            <section class="inicio" id="inicio">
                <div class="bienbenido">
                    <h4>Bienbenido!</h4>
                </div>
                <div class="contenedor">
                    <div class="perfil">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($code_image); ?>">
                    </div>
                    <div class="datos">
                        <div class="titulo">
                                <h3>Informacion del Estudiante</h3>
                        </div>
                        <div class="cuadros codigo">
                            <p>DNI:</p>
                            <div class="cont codigo">
                                <p><?php echo $_SESSION['dni']?></p>
                            </div>
                        </div>
                        <div class="cuadros Grado">
                            <p>Grado:</p>
                            <div class="cont grado">
                                <p><?php echo $_SESSION['grado']?></p>
                            </div>
                        </div>
                        <div class="cuadros Nivel">
                            <p>Nivel:</p>
                            <div class="cont nivel">
                                <p><?php echo $_SESSION['nivel']?></p>
                            </div>
                        </div>
                        <div class=" cuadros Promedio Acumulado">
                            <p>Promedio Acumulado:</p>
                            <div class="cont promedio">
                                <p>12.6</p>
                            </div>
                        </div>
                        <div class="cuadros Faltas">
                            <p>Numero de Inasistencia:</p>
                            <div class="cont promedio">
                                <p>12.6</p>
                            </div>
                        </div>
                        <div class=" cuadros Promedio Acumulado" id="cuadro-año">
                            <p>"Año de la Universilizacion de la Salud"</p>
                            
                        </div>
                    </div>
                </div>
            </section>
            <section class="cursos" id="cursos">
                <div class="materias">
                    <div class="texto">
                        <h2>Cursos a cargo </h2>
                    </div><br>
                    <div class="cuadro-materia">
                        <div class="materia 1"> 
                            <h4>Nombre de la primera materia</h4>
                            <div>
                                <table class="tabla">
                                    <tr class="tb">
                                        <td>Notas Parciales</td>
                                        <td>Notas de Trabajo</td>
                                        <td>Medio Curso</td>
                                        <td>Examen Final</td>
                                        <td>Promedio Final</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="materia 2"> 
                            <h4>Nombre de la Segunda materia</h4>
                            <div>
                                <table class="tabla">
                                    <tr class="tb">
                                        <td>Notas Parciales</td>
                                        <td>Notas de Trabajo</td>
                                        <td>Medio Curso</td>
                                        <td>Examen Final</td>
                                        <td>Promedio Final</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="materia 3"> 
                            <h4>Nombre de la tercera materia</h4>
                            <div>
                                <table class="tabla">
                                    <tr class="tb">
                                        <td>Notas Parciales</td>
                                        <td>Notas de Trabajo</td>
                                        <td>Medio Curso</td>
                                        <td>Examen Final</td>
                                        <td>Promedio Final</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="materia 4"> 
                            <h4>Nombre de la cuarta materia</h4>
                            <div>
                                <table class="tabla">
                                    <tr class="tb">
                                        <td>Notas Parciales</td>
                                        <td>Notas de Trabajo</td>
                                        <td>Medio Curso</td>
                                        <td>Examen Final</td>
                                        <td>Promedio Final</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="materia 5"> 
                            <h4>Nombre de la quinta materia</h4>
                            <div>
                                <table class="tabla">
                                    <tr class="tb">
                                        <td>Notas Parciales</td>
                                        <td>Notas de Trabajo</td>
                                        <td>Medio Curso</td>
                                        <td>Examen Final</td>
                                        <td>Promedio Final</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>4</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="horario" id="horario">
                <div class="texto">
                    <h2>Horario de Clases</h2>
                </div>
                <div class="contenidos">
                    <div class="contenedor-tablas">
                        <table class="tabla">
                            <tr class="tb">
                                <td>Hora</td>
                                <td>Lunes</td>
                                <td>Martes</td>
                                <td>Miercoles</td>
                                <td>Jueves</td>
                                <td>Viernes</td>
                                <td>Sabado</td>
                            </tr>
                            <tr>
                                <td class="tb1">7:45am</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tb1">7:45am</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tb1">7:45am</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tb1">7:45am</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tb1">7:45am</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tb1">7:45am</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
            </section>

            
        </section>
        

            </section>
            <footer class="footer">
            <div class="icono">
                <a href="https://www.twitter.com" class="icon-twitter"></a>
                <a href="https://www.facebook.com" class="icon-facebook"></a>
                <a href="https://www.github.com" class="icon-github"></a>
                <a href="https://accounts.google.com/ServiceLogin/signinchooser?elo=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="icon-gplus"></a>
            </div>
            <p class="copy">Colegio Nacional &copy; 2019 - Tingo Maria</p>
        </footer>
    </main>
    <script src="js/jquery.js"></script>
    <script src="js/menu.js"></script>
    
</body>
</html>