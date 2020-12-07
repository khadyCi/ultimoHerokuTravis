<?php
    $suma7 = -1 ;
    $dado =[];
    $intentos = 0;
    
    while ($suma7 != 7) {
        $dado[0] = rand(1, 6);
        $dado[1] = rand(1,6);
        $intentos ++;
        $suma7 = $dado[0] + $dado[1];
        
    }
   echo"hay ".$intentos." intentos", "<br><br>";
    switch ($dado[0]) {
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
    switch ($dado[1]) {
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
    
   
    
?>