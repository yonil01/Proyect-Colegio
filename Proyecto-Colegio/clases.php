<?php
    
    //clase oficina
     class oficina{
        private $id;
        private $nombre;
        private $director;
        private $profesores;
        public function __construct($id, $nombre){
            $this->id=$id;
            $this->nombre=$nombre;
            $this->director=new director();
            $this->profesores=array();
        }
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id=$id;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function _agregarDirector($id, $dni, $apellido, $nombre, $fecha_nacimiento){
            $this->director->setId($id);
            $this->director->setDni($dni);
            $this->director->setApellido($apellido);
            $this->director->setNombre($nombre);
            $this->director->setFecha_Nacimiento($fecha_nacimiento);
        }
        public function getProfesores(){
            return $this->profesores;
        }
        public function _agregarProfesor($profesor){
            array_push($profesores, $profesor);
        }

    }
    //clase colegio
     class colegio{
        private $id;
        private $nombre;
        private $niveles;
        private $oficina;
        public function __construct($id, $nombre){
                $this->id=$id;
                $this->nombre=$nombre;
        }
        
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id=$id;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function getNiveles(){          
            return $this->niveles;
        }
        public function setNivel($niveles){
            $this->niveles=$niveles;
        }
        public function getOficina(){
            return $this->oficina;
        }
        public function agregar_Oficina($oficina){
            $this->oficina=$oficina;
        }
    }
    //clase nivel
     class nivel{
        private $id;
        private $nombre;
        
        //private $secciones;
        public function __construct($id,$nombre){
            $this->id=$id;
            $this->nombre=$nombre;
           
        }
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id=$id;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        
        
    }

    //clase primaria
    class primaria extends nivel{
        private $grados;
        public function __construct($id, $nombre){
            parent::__construct($id, $nombre);
            $this->grados=array();
        }
        public function getGrados(){
            return $this->grados;
        }
        public function setGrados($grado){
            array_push($this->grados,$grado);
        }
    }

    //clase secundaria
    class secundaria extends nivel{
        private $grados;
        public function __construct($id, $nombre){
            parent::__construct($id, $nombre);
            $this->grados=array();
        }
        public function getGrados(){
            return $this->grados;
        }
        public function setGrados($grado){
            array_push($this->grados,$grado);
        }
    }

    //clase niveles
    class niveles{
        private $primaria;
        private $secundaria;
        public function __construct($primaria, $secundaria){
            $this->primaria=$primaria;
            $this->secundaria=$secundaria;
            
        }
        public function getPrimaria(){
            return $this->primaria;
        }
        public function setPrimaria($primaria){
            $this->primaria=$primaria;
        }
        public function getSecundaria(){
            return $this->secundaria;
        }
        public function setSecundaria($secundaria){
            $this->secundaria=$secundaria;
        }
        
    }
    //clase aula
    class aula{
        private $id;
        private $nombre;
        private $seccion;
        public function __construct($id, $nombre){
            $this->id=$id;
            $this->nombre=$nombre;
        }

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id=$id;
        }

        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function getSeccion(){
            return $this->nombre;
        }
        public function setSeccion($seccion){
            $this->seccion=$seccion;
        }
    }
    //clase persona
    class persona{
        private $dni;
        private $apellidop;
        private $apellidom;
        private $nombre;
        private $sexo;
        private $fecha_nacimiento;
        private $direccion;
        private $nro_celular;
        public function __construct($dni, $apellidop, $apellidom, $nombre, $sexo, $fecha_nacimiento, $direccion, $nro_celular){
            $this->dni=$dni;
            $this->apellidop=$apellidop;
            $this->apellidom=$apellidom;
            $this->nombre=$nombre;
            $this->sexo=$sexo;
            $this->fecha_nacimiento=$fecha_nacimiento;
            $this->direccion=$direccion;
            $this->nro_celular=$nro_celular;
        }
        public function getDni(){
            return $this->dni;
        }
        public function setDni($dni){
            $this->dni=$dni;
        }

        public function getApellidop(){
            return $this->apellidop;
        }
        public function setApellidop($apellidop){
            $this->apellidop=$apellidop;
        }

        public function getApellidom(){
            return $this->apellidom;
        }
        public function setApellidom($apellidom){
            $this->apellidom=$apellidom;
        }

        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }

        public function getSexo(){
            return $this->sexo;
        }
        public function setSexo($sexo){
            $this->sexo=$sexo;
        }

        public function getFecha_Nacimiento(){
            return $this->fecha_nacimiento;
        }
        public function setFecha_Nacimiento($fecha_nacimiento){
            $this->fecha_nacimiento=$fecha_nacimiento;
        }

        public function getDireccion(){
            return $this->direccion;
        }
        public function setDireccion($direccion){
            $this->direccion=$direccion;
        }

        public function getNro_Celular(){
            return $this->nro_celular;
        }
        public function setNro_Celular($nro_celular){
            $this->nro_celular=$nro_celular;
        }
        
    }
    //clases director
     class director extends persona{
        public function __construct($id, $dni, $apellido, $nombre, $fecha_nacimiento){
            $this->id=$id;
            $this->dni=$dni;
            $this->apellido=$apellido;
            $this->nombre=$nombre;
            $this->fecha_nacimiento=$fecha_nacimiento;
        }
    }
    //clase profesor
    class profesor extends persona{
        private $horario;
        private $cursos;
        public function __construct($id, $dni, $apellido, $nombre, $fecha_nacimiento){
            parent::__construct($id, $dni, $apellido, $nombre, $fecha_nacimiento);
            $this->cursos=array();

        }
        public function getCursos(){
            return $this->Cursos;
        }
        public function setNivel($curso){
            array_push($this->nivel, $curso);
        }
        public function _agregarHorario($horario){
            $this->horario=$horario;
        }
        public function getHorario(){
            return $this->horario;
        }
    }
    //clase nota
    class nota{
        private $nombre_curso;
        private $notas;
        public function __construct($nombre_curso){
            $this->nombre_curso=$nombre_curso;
            $this->notas=array();
        }
        public function getNombre(){
            return $this->notas;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }

        public function _agregarNota($n){
            array_push($this->notas, $n);
        }
        public function _mostarNotas(){
            if(count($this->notas)==0){
                return "No existe ninguna Nota";
            }else{
                $cadena="";
                for($i=0;$i<count($this->notas);$i++){
                    $cadena = "$cadena" . strval($this->notas[$i]) . "\n";
                    
                }
                return $cadena;
            }
        }
        
        public function obtenerNota($pos){
            if($pos<count($this->notas)){
                return $this->notas[$pos];
            }else{
                return -1;
            }
            
        }
    }
    //clase curso
    class curso{
        private $id;
        private $nombre;

        public function __construct($id, $nombre){
            $this->id=$id;
            $this->nombre=$nombre;
        }
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id=$id;
        }

        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->id=$nombre;
        }
        
    }
    //clase horario
    class horario{
        private $dias;
        private $hora;
    }
    //clase alumno
    class alumno extends persona{
        private $apoderado;
        private $notas;
        public function __construct($dni, $apellidop, $apellidom, $nombre, $sexo, $fecha_nacimiento, $direccion, $nro_celular, $apoderado){
            parent::__construct($dni, $apellidop, $apellidom, $nombre, $sexo, $fecha_nacimiento, $direccion, $nro_celular);
            $this->apoderado=$apoderado;
            $this->notas=array();
        }
        public function getApoderado(){
            return $this->apoderado;
        }
        public function setApoderado($apoderado){
            $this->apoderado=$apoderado;
        }
        public function getNotas(){
            return $cursos();
        }
        public function setCurso($curso){
            
            
        }

    }
    //clase seccion
    class seccion{
        private $id;
        private $nombre;
        private $profesores;
        private $alumnos;

        public function __construct($id, $nombre){
            $this->id=$id;
            $this->nombre=$nombre;
            $this->profesores=array();
            $this->alumnos=array();
        }
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id=id;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($id){
            $this->nombre=nombre;
        }
        public function getProfesores(){
            return $this->profesores;
        }
        public function setrProfesor($profesor){
            array_push($this->profesores, $profesor);
        }
        public function getAlumnos(){
            return $this->alumnos;
        }
        public function setAlumno($alumno){
            array_push($this->alumnos, $alumno);
        }
    }
    //clase grado
    class grado{
        private $id;
        private $nombre;
        private $secciones;
        public function __construct($id, $nombre){
            $this->id=$id;
            $this->nombre=$nombre;
            $this->secciones=array();
        }
        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id=id;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($id){
            $this->nombre=nombre;
        }
        public function getSeccion(){
            return $this->secciones;
        }
        public function setSeccion($seccion){
            array_push($this->secciones, $seccion);
        }
    }

    //consultas
     function llenar_Colegio(){
        $id=0; 
        $nombre="";
        require 'database.php';
            $sql = "SELECT * FROM colegio";
            $result = $connection->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    $id=$row['id_cole'];
                    $nombre=$row['nombre_cole'];
                    
                }
            }
            $c1=new colegio($id, $nombre);
            return $c1;
    }

    
    
    function llenar_niveles_colegio($colegio){
        $primaria=null;
        $secundaria=null;
        
        require 'database.php';
            $sql = "SELECT * FROM nivel";
            $result = $connection->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    if($row['id_nivel']==1){
                        $primaria = new primaria($row['id_nivel'],$row['nombre_nivel']);
                    }else{
                        $secundaria = new secundaria($row['id_nivel'],$row['nombre_nivel']);
                    }
                }
            }
            $nivel=new niveles($primaria,$secundaria);
            $colegio->setNivel($nivel);
            
    }

    function llenar_grados_niveles_colegio($colegio){
        require 'database.php';
        $sql = "SELECT * FROM grado";
        $result = $connection->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $g = new grado($row['id_grado'],$row['nombre_grado']);
                if($row['id_nivel1']==1){
                    $colegio->getNiveles()->getPrimaria()->setGrados($g);
                }else{
                    $colegio->getNiveles()->getSecundaria()->setGrados($g);
                }
            }
        }
    }

    function llenar_seccion_grados_nivel_colegio($colegio){
        require 'database.php';
        $sql = "SELECT * FROM seccion";
        $result = $connection->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $s = new seccion($row['id_seccion'],$row['nombre_seccion']);
                if($row['id_grado1']==1){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[0]->setSeccion($s);
                }
                if($row['id_grado1']==2){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[1]->setSeccion($s);
                }
                if($row['id_grado1']==3){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[2]->setSeccion($s);
                }
                if($row['id_grado1']==4){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[3]->setSeccion($s);
                }
                if($row['id_grado1']==5){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[4]->setSeccion($s);
                }
                if($row['id_grado1']==6){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[5]->setSeccion($s);
                }
                if($row['id_grado1']==7){
                    $colegio->getNiveles()->getSecundaria()->getGrados()[0]->setSeccion($s);
                }
                if($row['id_grado1']==8){
                    $colegio->getNiveles()->getSecundaria()->getGrados()[1]->setSeccion($s);
                }
                if($row['id_grado1']==9){
                    $colegio->getNiveles()->getSecundaria()->getGrados()[2]->setSeccion($s);
                }
                if($row['id_grado1']==10){
                    $colegio->getNiveles()->getSecundaria()->getGrados()[3]->setSeccion($s);
                }
                if($row['id_grado1']==11){
                    $colegio->getNiveles()->getSecundaria()->getGrados()[4]->setSeccion($s);
                }
            }
        }
    }

    function llenar_alumno_seccion_grado_nivel_colegio($colegio){
        require 'database.php';
        $sql = "SELECT * FROM alumno";
        $result = $connection->query($sql);
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                

                $alum = new alumno($row['dni_alumno'],$row['apellidop_alumno'],$row['apellidom_alumno'],$row['nombre_alumno'],
                $row['sexo_alumno'], $row['fechaN_alumno'], $row['dni_alumno'], $row['direccion_alumno'], $row['celular_alumno'],
                $row['apoderado_alumno']);

                
                 if($row['id_seccion2']==1){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[0]->getSeccion()[0]->setAlumno($alum);
                }
                if($row['id_seccion2']==2){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[0]->getSeccion()[1]->setAlumno($alum);
                }
                if($row['id_seccion2']==3){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[0]->getSeccion()[2]->setAlumno($alum);
                }
                if($row['id_seccion2']==4){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[1]->getSeccion()[0]->setAlumno($alum);
                }
                if($row['id_seccion2']==4){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[1]->getSeccion()[1]->setAlumno($alum);
                }
                if($row['id_seccion2']==5){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[1]->getSeccion()[2]->setAlumno($alum);
                }
                if($row['id_seccion2']==6){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[2]->getSeccion()[0]->setAlumno($alum);
                }
                if($row['id_seccion2']==7){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[2]->getSeccion()[1]->setAlumno($alum);
                }
                if($row['id_seccion2']==8){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[2]->getSeccion()[2]->setAlumno($alum);
                }
                if($row['id_seccion2']==9){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[3]->getSeccion()[0]->setAlumno($alum);
                }
                if($row['id_seccion2']==10){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[3]->getSeccion()[1]->setAlumno($alum);
                }
                if($row['id_seccion2']==11){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[3]->getSeccion()[2]->setAlumno($alum);
                }
                if($row['id_seccion2']==12){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[4]->getSeccion()[0]->setAlumno($alum);
                }
                if($row['id_seccion2']==13){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[4]->getSeccion()[1]->setAlumno($alum);
                }
                if($row['id_seccion2']==14){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[4]->getSeccion()[2]->setAlumno($alum);
                }
                if($row['id_seccion2']==15){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[5]->getSeccion()[0]->setAlumno($alum);
                }
                if($row['id_seccion2']==16){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[5]->getSeccion()[1]->setAlumno($alum);
                }
                if($row['id_seccion2']==17){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[5]->getSeccion()[3]->setAlumno($alum);
                }
                if($row['id_seccion2']==18){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[6]->getSeccion()[0]->setAlumno($alum);
                }
                if($row['id_seccion2']==19){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[6]->getSeccion()[1]->setAlumno($alum);
                }
                if($row['id_seccion2']==20){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[6]->getSeccion()[2]->setAlumno($alum);
                }
                if($row['id_seccion2']==21){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[7]->getSeccion()[0]->setAlumno($alum);
                }
                if($row['id_seccion2']==22){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[7]->getSeccion()[1]->setAlumno($alum);
                }
                if($row['id_seccion2']==23){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[7]->getSeccion()[2]->setAlumno($alum);
                }
                if($row['id_seccion2']==24){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[8]->getSeccion()[0]->setAlumno($alum);
                }
                if($row['id_seccion2']==25){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[8]->getSeccion()[1]->setAlumno($alum);
                }
                if($row['id_seccion2']==26){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[8]->getSeccion()[2]->setAlumno($alum);
                }
                if($row['id_seccion2']==27){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[9]->getSeccion()[0]->setAlumno($alum);
                }
                if($row['id_seccion2']==28){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[9]->getSeccion()[1]->setAlumno($alum);
                }
                if($row['id_seccion2']==29){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[9]->getSeccion()[2]->setAlumno($alum);
                }
                if($row['id_seccion2']==30){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[10]->getSeccion()[0]->setAlumno($alum);
                }
                if($row['id_seccion2']==31){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[10]->getSeccion()[1]->setAlumno($alum);
                }
                if($row['id_seccion2']==32){
                    $colegio->getNiveles()->getPrimaria()->getGrados()[10]->getSeccion()[2]->setAlumno($alum);
                }
                
            }
        }
    }
     

    //consultas apropiadas
    function LLenar_Datos(){
        $colegio=llenar_Colegio();
        llenar_niveles_colegio($colegio);
    
        llenar_grados_niveles_colegio($colegio);
        llenar_seccion_grados_nivel_colegio($colegio);
        llenar_alumno_seccion_grado_nivel_colegio($colegio);
        return $colegio;
    }
    
    

    //Buscar alumno
    $_SESSION['nivel']="";
    $_SESSION['grado']="";
    function Buscar_Alumno($dni){
        $colegio=LLenar_Datos();
        for($i=0;$i<count($colegio->getNiveles()->getPrimaria()->getGrados());$i++){
            for($j=0;$j<count($colegio->getNiveles()->getPrimaria()->getGrados()[$i]->getSeccion());$j++){
               
                for($k=0;$k<count($colegio->getNiveles()->getPrimaria()->getGrados()[$i]->getSeccion()[$j]->getAlumnos());$k++){
                    if($colegio->getNiveles()->getPrimaria()->getGrados()[$i]->getSeccion()[$j]->getAlumnos()[$k]->getDni()==$dni){
                        $_SESSION['nivel'] = $colegio->getNiveles()->getPrimaria()->getNombre();
                        $_SESSION['grado'] = $colegio->getNiveles()->getPrimaria()->getGrados()[$i]->getNombre();
                        return $colegio->getNiveles()->getPrimaria()->getGrados()[$i]->getSeccion()[$j]->getAlumnos()[$k];
                        
                    }
                }
            }
        }

        for($i=0;$i<count($colegio->getNiveles()->getSecundaria()->getGrados());$i++){
            for($j=0;$j<count($colegio->getNiveles()->getSecundaria()->getGrados()[$i]->getSeccion());$j++){
                for($k=0;$k<count($colegio->getNiveles()->getSecundaria()->getGrados()[$i]->getSeccion()[$j]->getAlumnos());$k++){
                    if($colegio->getNiveles()->getSecundaria()->getGrados()[$i]->getSeccion()[$j]->getAlumnos()[$k]->getDni()==$dni){
                        $_SESSION['nivel'] = $colegio->getNiveles()->getSecundaria()->getNombre();
                        $_SESSION['grado'] = $colegio->getNiveles()->getSecundaria()->getGrados()[$i]->getNombre();
                        return $colegio->getNiveles()->getSecundaria()->getGrados()[$i]->getSeccion()[$j]->getAlumnos()[$k];
                    }
                }
            }
        }
    }
    
    
?>