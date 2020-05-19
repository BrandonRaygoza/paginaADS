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
          <h5>Menu</h5>
            <ul>
                <li><a class="<?php echo ($page == "index.php" ? "active" : "")?>" href="index.php"><i class="fas fa-home"></i>Inicio</a></li>
                <li><a class="<?php echo ($page == "reportes.php" ? "active" : "")?>" href="index.php?op=1"><i class="fas fa-paste"></i>Reportes</a></li>
                <li><a class="<?php echo ($page == "clientes.php" ? "active" : "")?>" href="index.php?op=2"><i class="fas fa-users"></i>Clientes</a></li>
                <li><a class="<?php echo ($page == "ordenes.php" ? "active" : "")?>" href="index.php?op=3"><i class="fas fa-clipboard-check"></i>Ordenes</a></li>
                <li><a class="<?php echo ($page == "entregas.php" ? "active" : "")?>" href="index.php?op=4"><i class="fas fa-motorcycle"></i>Entregas</a></li>
                <li><a class="<?php echo ($page == "almacen.php" ? "active" : "")?>" href="index.php?op=5"><i class="fas fa-box-open"></i>Almacen</a></li>
                <li><a class="<?php echo ($page == "productos.php" ? "active" : "")?>" href="index.php?op=6"><i class="fas fa-utensils"></i>Productos</a></li>
                <li><a class="<?php echo ($page == "ventas.php" ? "active" : "")?>" href="index.php?op=7"><i class="fas fa-dollar-sign"></i>Ventas</a></li>
                <li><a class="<?php echo ($page == "personal.php" ? "active" : "")?>" href="index.php?op=8"><i class="fas fa-address-book"></i>Personal</a></li>
            </ul>
        </div>

        <header>
            <img src="cimarron.png" alt="logo" width="105" height="110">
            <h1>Sistema de Reinscripciones de la UABC</h1>
            
        </header>

      <div class = "wrapper">
          <div class="main_content">
              <div class="header">
                  <?php
                    echo $titulo_contenido;
                  ?>
              </div>
              <div class="info">
                  <?php
                    include $contenido;
                  ?>
                  
              </div>
          </div>
    </div>
  </body>
</html>