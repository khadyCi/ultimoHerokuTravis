<?php
     $usuario_correcto = "juan@gmail.com";
     $palabra_secreta_correcta = "juan";
     if (isset($_POST['submit'])) {
         $usuario = $_POST['email'];
         $pw = $_POST['pass'];
         if ($usuario == $usuario_correcto && $pw == $palabra_secreta_correcta) {
             header("location:hola.html");
             echo'hola';
         } else {
            echo '<script language="javascript">alert( "Invalid Username/Password.");</script>';
         }
     }

echo '
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
         <form  action="index.php" method="post">
             <p>
              <input type="email" name="email" placeholder="Email"> 
             </p>
             <p>
             <input type="password" name="pass" placeholder="Passworld"> 
             </p>
             <footer class="footer">
            <input  type="submit" name= "submit" value ="ingresar" class ="button">
             </footer>
        </form>
           
        </section>
        
    </div>
</body>
</html>
';