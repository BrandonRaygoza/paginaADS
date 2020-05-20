<?php

if(isset($_GET["op"]))
    $op=$_GET["op"];
else
    $op=0;

switch($op){
    case 0:
        $titulo_contenido="Inicio de sesion";
        //$contenido="inicio.php";
        $page="index.php";
    break;

    case 1:
        $titulo_contenido="Horario preliminar";
        $contenido="consultarHorario.php";
        $page="consultarHorario.php";
    break;

    case 2:
        $titulo_contenido="Clientes";
        $contenido="clientes.php";
        $page="clientes.php";
    break;
    
    case 3:
        $titulo_contenido="Ordenes";
        $contenido="ordenes.php";
        $page="ordenes.php";
    break;    
    
    case 4:
        $titulo_contenido="Entregas";
        $contenido="entregas.php";
        $page="entregas.php";
    break;
    
    case 5:
        $titulo_contenido="Almacen";
        $contenido="almacen.php";
        $page="almacen.php";
    break;

}

?>