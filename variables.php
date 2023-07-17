<?php
    $palabra="hola";
    echo var_dump($palabra);
    echo "<br>";

    $boolean=true;
    echo var_dump($boolean);
    echo "<br>";

    $numero=4;
    echo var_dump($numero);
    echo "<br>";

    $dias=array("Lunes","Martes","Miercoles");
    echo var_dump($dias);
    echo "<br>";

    //array con propiedades

    $colores= array("color1"=>"rojo","color2"=>"azul");
    echo var_dump($colores["color1"]);
    echo "<br>";

    //variable tipo objeto clave valor

    $verduras=(object)["verdura1"=> "tomate", "verdura2"=>"lechuga"];
    echo var_dump($verduras->verdura1);
    echo "<br>";

    function saludo(){
        echo "holaa como estas";
        echo "<br>";
    }

    saludo();

    function despedida($mensaje){
        echo $mensaje;
        echo "<br>";
    }

    despedida("hasta luego");

    function retorno ($valor){
        return $valor;
    }

    echo retorno(4);

    $var1=6;
    $var2=2;

    if ($var1>$var2){
        echo "El mayor es: ". $var1;
    }
    else {
        echo "El mayor es: " . $var2;
    }

    $auto1 =(object)["marca"=>"ford","modelo"=>"f150"];
    $auto2 =(object)["marca"=>"toyota","modelo"=>"rav"];

    function mostrar($automovil){
        echo "<br>";
        echo "Hola soy el auto: " . ($automovil->marca) . " y soy el modelo: " . $automovil->modelo;
        echo "<br>";
    }

    mostrar($auto1);

    class Auto{
        public $marca;
        public $modelo;

        function mostrar(){
            echo "Hola soy el auto: " . $this->marca . " y soy el modelo: " . $this->modelo;
            echo "<br>";
        }
    }

    $auto= new Auto();
    $auto->marca="Ford";
    $auto->modelo="F150";
    $auto->mostrar();
?>