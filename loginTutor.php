<!DOCTYPE html>

<?php
  include 'navegacion.php';
?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Administrar</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/0c23213105.js" crossorigin="anonymous"></script>
  </head>
  <body>
      
        <header>
            <img src="logoUABC.png" alt="logo" width="150" height="150">
            <h1>Sistema de Reinscripciones</h1>
            
        </header>

      <div class = "wrapper">
          <div class="main_content">
              <div class="header">
                <h2>Inicio de sesion tutores </h2>
                  <a href="login.php" class="boton2">Alumno</a>
              </div>
              <div class="login">
                <form method="get" action="menuTutor.php">
                        <p>
                            <input type="text" name="nombre" placeholder="Usuario">
                            <input type="password" name="matricula" placeholder="Clave">
                        </p>
                        <input type="submit" value="Ingresar" class="button">
                </form> 
              </div>
          </div> 
    </div>
  </body>
</html>