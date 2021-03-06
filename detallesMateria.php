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
                <li><a class="<?php echo ($page == "consultarHorario.php" ? "active" : "")?>" href="consultarHorario.php"><i class="fas fa-paste"></i>Consultar horario preliminar</a></li>
                <li><a class="<?php echo ($page == "materiaAgregada.php" ? "active" : "")?>" href="materiaAgregada.php"><i class="fas fa-users"></i>Consultar estado de subasta</a></li>
                <li><a class="<?php echo ($page == "ordenes.php" ? "active" : "")?>" href="index.php?op=3"><i class="fas fa-clipboard-check"></i>Informacion personal</a></li>
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
                      Detalles del curso
                  </p>
              </div>
              <div class="info">
                  <p>
                    <h2> Mediciones Electricas </h2>
                    Profesor: JOHN WICK <br>
                    Etapa: Basica  <br>
                    Lunes - Martes: 7:00 - 8:00 am  <br>
                    Jueves: 7:00 - 9:00 am  <br>

                    <a href="tabla_MateriasDisponibles.php" class="botonCarga">Volver</a>
                  
                  </p>
                  
              </div>
          </div>
    </div>
  </body>
</html>