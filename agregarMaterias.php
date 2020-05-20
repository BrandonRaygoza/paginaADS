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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
      <div class = "sidebar">
          <h5>Menu</h5>
            <ul>
                <li><a class="<?php echo ($page == "index.php" ? "active" : "")?>" href="index.php"><i class="fas fa-home"></i>Inicio</a></li>
                <li><a class="<?php echo ($page == "Consultar.php" ? "active" : "")?>" href="index.php?op=1"><i class="fas fa-paste"></i>Consultar horario preliminar</a></li>
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
                      Agregar Materias
                  </p>
              </div>

              
              <div class="info">

              
              <div class="card" style="width: 18rem;">
                  <div class="card-body">
                      <h5 class="card-title">Matematicas Avanzadas</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Estapa diciplinaria</h6>
                      <p class="card-text"> 
                    Clave: 1105  <br>
                    Tipo: Clase <br>
                    Horario: 10:00AM - 12:00PM<br>
                    </p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregar-modal">
                    agregar</button>

                  </div>
                </div>


                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                      <h5 class="card-title">Bases de datos</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Estapa diciplinaria</h6>
                      <p class="card-text"> 
                      Clave: 1105  <br>
                      Tipo: Clase <br>
                      Horario: 12:00PM - 2:00PM<br>
                      </p>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregar-modal" onclick="datos()">
                      agregar</button>
                  </div>
                </div>


                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                      <h5 class="card-title">Microprocesadores y Microcontroladores</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Estapa diciplinaria</h6>
                      <p class="card-text"> 
                      Clave: 1105  <br>
                      Tipo: Clase <br>
                      Horario: 4:00pm - 6:00PM<br>
                      </p>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregar-modal">
                      agregar</button>
                    </div>
                </div>


              </div>
          </div>
    </div>
      <!-- Modal -->
      <div id="agregar-modal"class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Deseas agregar?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Matematicas Avanzadas<br>
            Clave: 1105 <br>
            Horario: 10:00AM - 12:00PM<br>
            
            </p>
          
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="agregar()">Agregar</button>
          </div>
        </div>
      </div>
    </div>


  </body>
</html>









