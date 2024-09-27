<?php
    #Clase: 
    #Una clase es un modelo que se utiliza para crear objetos que comparten un mismo comportamiento
    #un mismo estado y una misma identidad

    class Automovil{

        #PROPIEDADES:
        #SON LAS CARACTERISTICAS QUE PUEDEN TENER UN OBJETO.

        public $marca;
        public $modelo;

        #METODO
        #ES EL ALGORITMO ASOCIADO A UN OBJETO QUE INDICA LA CAPACIDAD DE LO QUE ESTE PUEDE HACER

        public function mostrar(){
            echo "<p>Hola! soy un $this->marca,  modelo $this->modelo</p>";
        }
    }

    #OBJETO
    #UNA IDENTIDAD PROVISTA DE METODO O MENSAJES A LOS CUALES RESPONDEN PROPIEDADES CON VALORES CONCRETOS

    $a = new Automovil();

    $a -> marca = "Toyota";

    $a -> modelo = "Corolla";

    $a-> mostrar();

    $b = new Automovil();

    $b -> marca = "Hyundai";
    $b -> modelo = "Accent Vision";
    $b -> mostrar();

    #PRINCIPIOS POO

    #ABSTRACCIÓN : NUEVOS TIPOS DE DATOS(EL QUE TU QUIERAS, TU LO CREAS)
    #ENCAPSULAMIENTO: ORGANIZAR EL CÓDIGO EN GRUPOS LOGICOS
    #OCULTAMIENTO: OCULTAR  DETALLES DE IMPLEMENTACIÓN Y EXPONER SOLO LOS DETALLES QUE SEAN NECESARIOS PARA EL RESTO DEL SISTEMA 
?>