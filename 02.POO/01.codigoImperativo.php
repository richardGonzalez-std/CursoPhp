<?php
    #CodigoImperativo o CodigoEspaguetti

    $automovil1 = (object)["Marca"=>"Toyota", "modelo"=>"Corolla"];
    $automovil2 = (object)["Marca"=>"Hyundai", "modelo"=>"Accent Vision"];

    function mostrar($automovil){
        echo "<p>Hola! soy un $automovil->Marca, modelo $automovil->modelo</p>";
    }

    mostrar($automovil2);
    mostrar($automovil1 );
?>