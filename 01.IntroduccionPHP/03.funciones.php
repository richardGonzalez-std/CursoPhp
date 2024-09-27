<?php
    #Funciones_sin_parametros

    function saludos(){
        echo "Hola<br>";
    }

    saludos();
    
    #Funciones_con_parametros

    function despedida($adios){
        echo "$adios";
    }

    despedida("chao");

    #Funciones_con_retorno

    function retorno($retornar){
        return $retornar;
    }

    echo retorno("<br>Retornar");
?>