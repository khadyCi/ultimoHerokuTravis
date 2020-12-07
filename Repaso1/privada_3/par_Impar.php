<?php
    $suma3 = -1 ;
    $dado =[];
    $intentos = 0;
    
        $dado[0] = rand(1, 6);
        $dado[1] = rand(1, 6);
        $dado[2] = rand(1, 6);
        $suma3 = $dado[0] + $dado[1] + $dado[2];
        $intentos ++;
    
    if (isset($_POST['par'])) {
        if ($suma3 % 2 == 0) {
            echo '<script language="javascript">alert("Verdadero! La suma es par.");</script>';
        } else {
            echo '<script language="javascript">alert("Falso! La suma es impar.");</script>';
        }
    }else if(isset($_POST['impar'])){
        if ($suma3 % 2 != 0) {
            echo '<script language="javascript">alert("Verdadero! La suma es impar.");</script>';
        } else {
            echo '<script language="javascript">alert("Falso! La suma es par.");</script>';
        }
    }

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

    switch ($dado[2]) {
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
    
    echo'
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="par_Impar.php" method="post">
        <input type="radio" id="male" name="par" value="par">PAR<br>
        <input type="radio" id="male" name="impar" value="impar">IMPAR<br>
        <input type="submit"  value="submit">
        </form>
    </body>
    </html>';