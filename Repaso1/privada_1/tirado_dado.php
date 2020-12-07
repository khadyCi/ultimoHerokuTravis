<?php
    for ($i=0; $i <= 5 ; $i++) { 
        $variable= rand(1, 6);
        switch ($variable) {
            case '1':
               echo'<img src ="../imagenes/uno.jpg" alt="uno"  width="100" height="100" >';
                break;
            case '2':
                echo'<img src ="../imagenes/dos.jpg" alt="dos" width="100" height="100" >';
                break;
            case '3':
                echo'<img src ="../imagenes/tres.jpg" alt="tres" width="100" height="100" >';
                break;
            case '4':
                echo'<img src ="../imagenes/cuatro.jpg" alt="cuatro" width="100" height="100" >';
                break;
            case '5':
                echo'<img src ="../imagenes/cinco.jpg" alt="cinco" width="100" height="100" >';
                break;
            case '6':
                echo'<img src ="../imagenes/seis.jpg" alt="seis" width="100" height="100" >';
                break;
            
            
        }
    }
?>