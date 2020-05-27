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
                <h1>Asignar carga academica</h1>
              </div>

              <div class="info">
                <h2>Carga academica actual:</h2>    
                  
              <table>
                    <tr>
                        <th>Materia</th>
                        <th>Acciones</th>
                    </tr>
                    <tr>
                        <td>Mediciones Electricas</td>
                        <td>
                            <div class="dropdown">
                            <button class="btncog">
                                <i class="fa fa-cog"></i> 
                                <i class="fa fa-caret-down"></i>
                            </button>
                                <div class="dropdown-content">
                                    <a href="sinMaterias.php">Eliminar materia</a>
                                </div>
                            </div>
                    </td>
                    </tr>
                </table>
                <br>
                <h2>Materias disponibles:</h2>

                <table>
                <tr>
                        <th>Materia</th>
                        <th>Acciones</th>
                    </tr>
                <tr>
                        <td>Programacion Estructurada</td>
                        <td><div class="dropdown">
                            <button class="btncog">
                                <i class="fa fa-cog"></i> 
                                <i class="fa fa-caret-down"></i>
                            </button>
                                <div class="dropdown-content">
                                    <a href="subasta_MedicionesElectricas.php">Agregar materia</a>
                                </div>
                            </div>
                          </td>
                    </tr>
                    <tr>
                        <td>Circuitos Digitales</td>
                        <td><div class="dropdown">
                            <button class="btncog">
                                <i class="fa fa-cog"></i> 
                                <i class="fa fa-caret-down"></i>
                            </button>
                                <div class="dropdown-content">
                                    <a href="subasta_MedicionesElectricas.php">Agregar materia</a>
                                </div>
                            </div>
                          </td>
                    </tr>
                    <tr>
                        <td>Sistema Operativo UNIX</td>
                        <td><div class="dropdown">
                            <button class="btncog">
                                <i class="fa fa-cog"></i> 
                                <i class="fa fa-caret-down"></i>
                            </button>
                                <div class="dropdown-content">
                                    <a href="subasta_MedicionesElectricas.php">Agregar materia</a>
                                </div>
                            </div>
                          </td>
                    </tr>
                    <tr>
                        <td>Ecuaciones Diferenciales</td>
                        <td><div class="dropdown">
                            <button class="btncog">
                                <i class="fa fa-cog"></i> 
                                <i class="fa fa-caret-down"></i>
                            </button>
                                <div class="dropdown-content">
                                    <a href="subasta_MedicionesElectricas.php">Agregar materia</a>
                                </div>
                            </div>
                          </td>
                    </tr>
                    <tr>
                        <td>Matematicas Avanzadas</td>
                        <td><div class="dropdown">
                            <button class="btncog">
                                <i class="fa fa-cog"></i> 
                                <i class="fa fa-caret-down"></i>
                            </button>
                                <div class="dropdown-content">
                                    <a href="subasta_MedicionesElectricas.php">Agregar materia</a>
                                </div>
                            </div>
                          </td>
                    </tr>
                </table>
                
              </div>
          </div>
    </div>
  </body>
</html>