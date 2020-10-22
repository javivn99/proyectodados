<?php

include('../menu/menu.php');


$suma=0;

if(isset($_REQUEST['comprobar']))//si has pulsado el boton login
{
    for ($i = 0; $i <= 2; $i++) {
        $numero = rand(1, 6); 
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
        $suma+=$numero;
    }
    
    if($_REQUEST['opcion']==2){
        if($suma%2==0){
            echo "<script>alert('Has acertado. La suma de los números es PAR.');</script>";
        }else{
            echo "<script>alert('No has acertado. La suma de los números es IMPAR.');</script>";
        }
        
    }
    if($_REQUEST['opcion']==1){
        if($suma%2!=0){
            echo "<script>alert('Has acertado. La suma de los números es IMPAR.');</script>";
        }else{
            echo "<script>alert('No has acertado. La suma de los números es PAR.');</script>";
        }
        
    }

}

else{

    echo'<!DOCTYPE html>
    <html>
    <head>
    <title>Par / Impar</title>
    <link rel="stylesheet" href="../menu/menu.css">
    </head>
    <body>
    <form method="post">
        <input type="radio" name="opcion" value="2" checked="checked"/>PAR
        <br>
        <input type="radio" name="opcion" value="1"/>IMPAR
        <br>
        <input type="submit" value="Comprobar" name="comprobar" "/>
    </form>
    </body>
    </html>
    ';
}
?>




