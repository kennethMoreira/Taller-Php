<?php
session_start();
?>
<!doctype html>
<html lang="es">
<head>
    
    
    </head>
    
    <body>
    <?php
        
        $_SESSION['nombre']= $_POST['nombre'];
        echo "variable:" .$_SESSION ['nombre'];
    ?>
        <a href="index.php"> Volver</a>
    </body>

</html>