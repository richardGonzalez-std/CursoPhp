<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Template</title>
        <style>
            header{
            position:relative;
            margin:auto;
            text-align:center;
            padding:5px;

            }

            nav{
            position:relative;
            margin:auto;
            width:100%;
            height:auto;
            background:black;
            }

            nav ul{
            position:relative;
            margin:auto;
            width:50%;
            text-align:center;
            }

            nav ul li{
            display:inline-block;
            width:24%;
            line-height:50px;
            list-style: none;
            }

            nav ul li a{
            color:white;
            text-decoration:none;
            }

            section{
            position:relative;
            padding:20px;
            }

            h1{
                text-align: center;
            }
            form{
                text-align: center;
            }

            form > input{
                display: block;
                text-align: center;
                margin: 0 auto;
                padding: 10px;
                margin-top: 30px;
                width: 300px;
            }



        </style>
    </head>
    <body>
        
        <?php
            include "modules/navegacion.php";
        ?>

        <section>
            <?php
            $mvc = new MvcController();
            $mvc -> enlacesPaginasController();
            ?> 
        </section>
    </body>
</html>