<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sumar 7</title>
        <link rel="stylesheet" href="../menu/menu.css">
    </head>
    <body>

        <?php

            include('../menu/menu.php');
            echo '<h1>Nª de intentos para sumar 7</h1>';
            $contador = 1;
            $numero = rand(1, 6);
            $numero2 = rand(1, 6);
                    
            while($numero+$numero2!=7){
                $contador++;
                $numero = rand(1, 6);
                $numero2 = rand(1, 6);
            } 

            switch ($numero) {
                case 1:
                    echo ' <img src="../imagenes/uno.png" alt="uno" width="120" height="120">';
                    break;
                case 2:
                    echo ' <img src="../imagenes/dos.png" alt="dos" width="120" height="120">';
                    break;
                case 3:
                    echo ' <img src="../imagenes/tres.png" alt="tres" width="120" height="120">';
                    break;
                case 4:
                    echo ' <img src="../imagenes/cuatro.png" alt="cuatro" width="120" height="120">';
                    break;
                case 5:
                    echo ' <img src="../imagenes/cinco.png" alt="cinco" width="120" height="120">';
                    break;
                case 6:
                    echo ' <img src="../imagenes/seis.png" alt="cinco" width="120" height="120">';
                    break;
            }
                        
            switch ($numero2) {
                case 1:
                    echo ' <img src="../imagenes/uno.png" alt="uno" width="120" height="120">';
                    break;
                case 2:
                    echo ' <img src="../imagenes/dos.png" alt="dos" width="120" height="120">';
                    break;
                case 3:
                    echo ' <img src="../imagenes/tres.png" alt="tres" width="120" height="120">';
                    break;
                case 4:
                    echo ' <img src="../imagenes/cuatro.png" alt="cuatro" width="120" height="120">';
                    break;
                case 5:
                    echo ' <img src="../imagenes/cinco.png" alt="cinco" width="120" height="120">';
                    break;
                case 6:
                    echo ' <img src="../imagenes/seis.png" alt="cinco" width="120" height="120">';
                    break;
            }
    
            echo '<br><br><h3>El numero de veces que se ha intentado sumar 7 con los dados ha sido: '.$contador.'</h3>';

            ?>
        
    </body>
    </html>
