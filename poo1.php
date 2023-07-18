<?php
    class Automovil{
        #datos - atributos
        private $motor,$color,$marca;
        #constructor, es una funcion que se llama
        #al momento de crear el objeto
        public function __construct($color, $m, $k){
            $this->color = $color;
            $this->motor = $m;
            $this->marca = $k;
        }
        #operaciones - metodos
        function get_color(){
            return $this->color;
        }
        function set_color($c){
            $this->color = $c;
        }
    }
?>
<?php
    #declaracion e instanciacion (materializacion)
    $auto1 = new Automovil("rojo","2000CC, naftero","Toyota");
    printf("El auto es de color: %s",$auto1->get_color());
    $auto1->set_color("gris");
    printf("<br>El auto es de color: %s",$auto1->get_color());

    $autos[0] = new Automovil("rojo","2000CC, naftero","Toyota");
    $autos[1] = new Automovil("negro","2000CC, naftero","Chevrolet");
    $autos[1]->set_color("Blanco");
    for($x = 0 ; $x < count($autos) ; $x++){
        echo "<br>".$autos[$x]->get_color();
    }

?>