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
      <div class = "sidebar">
          <h5> </h5>
            <ul>
                <li><a class="<?php echo ($page == "index.php" ? "active" : "")?>" href="index.php"><i class="fas fa-home"></i>Inicio</a></li>
            </ul>
        </div>

        <header>
            <img src="logoUABC.png" alt="logo" width="150" height="150">
            <h1>Sistema de Reinscripciones</h1>
            
        </header>

      <div class = "wrapper">
          <div class="main_content">
              <div class="header">
                  <p>
                      Bienvenido
                  </p>
              </div>
              <div class="info">
                  <p>
                    Usuario: PACO TORRES <br>
                    Matricula: 2454879  <br>
                    Alumnos asignados: 2  <br>

                    <a href="alumnos.php" class="botonCarga">Asignar carga academica</a>
                  
                  </p>
                  
              </div>
          </div>
    </div>
  </body>
</html>