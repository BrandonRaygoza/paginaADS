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
            <h1>Subasta de materia</h1>
            
        </header>

      <div class = "wrapper">
          <div class="main_content">
              <div class="header">
                <h1>Mediciones Electricas</h1>
              </div>
              <div class="info">
                <table>
                    <tr>
                        <th>Posicion</th>
                        <th>Nombre</th>
                        <th>Puntaje</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Juanito Perez Rosales</td>
                        <td>17500</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sergio Daniel Gonzalez Ortega</td>
                        <td>16000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Brandon Raygoza</td>
                        <td>5000</td>
                    </tr>
                </table>
              </div>
          </div>
    </div>
  </body>
</html>