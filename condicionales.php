<!doctype html>
<html>
    <head>
        <title>Mi primera web</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <h1>TIENDA ONLINE</h1>
        <?php
            $edad = 7;
            if($edad >= 18 && $edad < 70){
                echo "Eres mayor";
                header("Location: https://www.google.com");
                exit;
            }else if( $edad < 18 && $edad > 11){
                $mensaje = "<script> alert('Tas chiquito');</script>";
                echo $mensaje;
            }else{
                header("Location: https://www.youtube.com");
                exit;
            }
        ?>
    </body>
</html>