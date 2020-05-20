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
                <li><a class="<?php echo ($page == "Consultar.php" ? "active" : "")?>" href="consultarHorario.php"><i class="fas fa-paste"></i>Consultar horario preliminar</a></li>
                <li><a class="<?php echo ($page == "clientes.php" ? "active" : "")?>" href="index.php?op=2"><i class="fas fa-users"></i>Consultar estado de subasta</a></li>
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
                      Horario
                  </p>
              </div>
              <div class="info">
                  
              <table>
                <tr>
                    <th>Horario</th>
                    <th>Lunes</th>
                    <th>Martes</th>
                    <th>Miercoles</th>
                    <th>Jueves</th>
                    <th>Viernes</th>
                </tr>
                <tr>
                    <td>7:00 - 8:00</td>
                    <td>Med. Electricas</td>
                    <td>Med. Electricas</td>
                    <td>----</td>
                    <td>Med. Electricas</td>
                    <td>----</td>
                </tr>
                <tr>
                    <td>8:00 - 9:00</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                    <td>Med. Electricas</td>
                    <td>----</td>
                </tr>
                <tr>
                    <td>9:00 - 10:00</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                </tr>
                <tr>
                    <td>10:00 - 11:00</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                </tr>
                <tr>
                    <td>11:00 - 13:00</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                </tr>
                <tr>
                    <td>13:00 - 14:00</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                </tr>
                <tr>
                    <td>14:00 - 15:00</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                </tr>
            </table>
                  
              </div>
          </div>
    </div>
  </body>
</html>