<?php
  session_start();
?>
<!doctype html>
<html lang="es">
<head>
    
    
    </head>
    
    <body>
    <?php
        if (isset($_SESSION['nombre'])){
            session_destroy();
            echo "Se ha destruido sesion exitosamente <br/>";
            echo "<a href='index.php'>Volver</a>";
        }
            else{
                
                echo "FATAL ERROR... <br/>";
                echo "<a href= 'index.php'>Volver </a>";
                
            }
         ?>   
        
        
    </body>

</html>
