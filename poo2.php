<?php
    class Persona{ #abstracto
        private $nombre,$tel;

        public function __construct($nombre,$tel){
            $this->nombre = $nombre;
            $this->tel = $tel;
        }
        
        #debe ser abstracto
        public function get_datos(){
            return " nombre: ".$this->nombre." telefono ".$this->tel; 
        }
    }

    class Alumno extends Persona{
        private $grado, $turno;

        public function __construct($nombre,$tel,$grado, $turno){
            parent::__construct($nombre,$tel);
            $this->grado = $grado;
            $this->turno = $turno;
        }

        public function get_datos(){
            return parent::get_datos()." grado: ".$this->grado." turno ".$this->turno;
        }
    }
    
    $alumno2 = new Persona("Alguien","00000");
    $alumnos[0] = new Alumno("Moises","0961675552","6","T");
    $alumnos[1] = new Alumno("Pepe","0961675552","6","T");
    $alumnos[2] = new Alumno("Juan","0961675552","6","T");

    for($x = 0 ; $x < count($alumnos); $x++){
        echo "<br>Datos del alumno".$alumnos[$x]->get_datos();
    }