<?php
    class EnlacesPaginas{

        public static function enlacesPaginasModel($enlacesModel){
            
            if( 
               $enlacesModel =="Ingresos" || 
               $enlacesModel =="Usuarios" ||
               $enlacesModel == "Salir"){

                $module = "views/modules/".$enlacesModel.".php";

            }

            else if($enlacesModel == "index"){
                $module ="views/modules/Registros.php";
            }

            else{
                $module = "views/modules/Registros.php";
            }

            return $module  ;
        }
    }
?>