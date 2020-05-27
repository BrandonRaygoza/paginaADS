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
            <h1>Asignar carga academica</h1>
            
        </header>

      <div class = "wrapper">
          <div class="main_content">
              <div class="header">
                  <p>
                      Confirmar materia
                  </p>
              </div>
              <div class="info">
                  <p>
                    <center><a href="cargaAsignada.php" class="boton2">Confirmar</a>
                    <a href="cargaAsignada.php" class="boton2">Cancelar</a></center>
                    
                  
                  </p>
                  
              </div>
          </div>
    </div>
  </body>
</html>