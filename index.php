<?php
    
 if (isset($_REQUEST['submit'])) {
    $Email = $_REQUEST['email'];
    $Passworld = $_REQUEST['password'];
    # Luego de haber obtenido los valores, ya podemos comprobar:
    if ($Email == "khady@gmail.com" && $Passworld == "juan") {

        # Luego redireccionamos a la página "Secreta"
        header("Location:hola.php");
    } else {
        # No coinciden, así que simplemente imprimimos un
        # mensaje diciendo que es incorrecto
        echo "El usuario o la contraseña son incorrectos puedes hacer una mdificacion";
    } 
 } 

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="index.css"
      rel="stylesheet" type="text/css">
</head>
<body>

    <div>
        <header class="header">
            <h3>LOG IN</h3>
        </header>
        <section>
         <form>
             <p>
              <input type="text" id="text1" placeholder="Email"> 
             </p>
             <p>
             <input type="url" id="text1" placeholder="Passworld"> 
             </p>
           </form>
        </section>
        <footer class="footer">
            <input class="button" type="submit" name="login" value ="ingresar">
        </footer>
    </div>
</body>
</html>';