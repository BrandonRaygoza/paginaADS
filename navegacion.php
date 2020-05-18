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
        $titulo_contenido="Reportes";
        $contenido="reportes.php";
        $page="reportes.php";
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
    
    case 6:
        $titulo_contenido="Productos";
        $contenido="productos.php";
        $page="productos.php";
    break;

    case 7:
        $titulo_contenido="Ventas";
        $contenido="ventas.php";
        $page="ventas.php";
    break;
    
    case 8:
        $titulo_contenido="Personal";
        $contenido="personal.php";
        $page="personal.php";
    break;
    
    case 20:
        $titulo_contenido="Nuevo cliente";
        $contenido="form_agregar_clientes.html";
        $page="clientes.php";
    break;
    
    case 21:
        $titulo_contenido="Nuevo cliente";
        $contenido="query_agregar_cliente.php";
        $page="clientes.php";
    break;
    
    case 22:
        $titulo_contenido="Nuevo cliente";
        $contenido="query_eliminar_cliente.php";
        $page="clientes.php";
    break;
    
    case 23:
        $titulo_contenido="Nueva entrada";
        $contenido="form_agregar_producto.html";
        $page="almacen.php";
    break;
    
    case 24:
        $titulo_contenido="Nueva entrada";
        $contenido="query_agregar_producto.php";
        $page="almacen.php";
    break;
    
    case 25:
        $titulo_contenido="Almacen";
        $contenido="query_eliminar_producto.php";
        $page="almacen.php";
    break;
    
    case 26:
        $titulo_contenido="Nuevo plato";
        $contenido="form_agregar_plato.html";
        $page="productos.php";
    break;
    
    case 27:
        $titulo_contenido="Nuevo plato";
        $contenido="query_agregar_plato.php";
        $page="productos.php";
    break;
    
    case 28:
        $titulo_contenido="Productos";
        $contenido="query_eliminar_plato.php";
        $page="productos.php";
    break;
    
    case 29:
        $titulo_contenido="Receta";
        $contenido="receta.php";
        $page="productos.php";
    break;
    
    case 30:
        $titulo_contenido="Nuevo ingrediente";
        $contenido="form_agregar_ingrediente.php";
        $page="productos.php";
    break;

    case 31:
        $titulo_contenido="Ingrediente agregado";
        $contenido="query_agregar_ingrediente.php";
        $page="productos.php";
    break; 
    
    case 32:
        $titulo_contenido="Editar cliente";
        $contenido="form_editar_cliente.php";
        $page="clientes.php";
    break; 

    case 33:
        $titulo_contenido="Editar cliente";
        $contenido="query_editar_cliente.php";
        $page="clientes.php";
    break;

    case 34:
        $titulo_contenido="Nuevo trabajador";
        $contenido="form_agregar_personal.html";
        $page="personal.php";
    break;
    
    case 35:
        $titulo_contenido="Nuevo trabajador";
        $contenido="query_agregar_personal.php";
        $page="personal.php";
    break;
    
    case 36:
        $titulo_contenido="Nueva orden";
        $contenido="form_agregar_venta.php";
        $page="ordenes.php";
    break;
    
    case 37:
        $titulo_contenido="Nueva orden";
        $contenido="query_agregar_venta.php";
        $page="ordenes.php";
    break;
    
    case 38:
        $titulo_contenido="Detalle de venta";
        $contenido="detalle_ventas.php";
        $page="ordenes.php";
    break;
    
    case 39:
        $titulo_contenido="Detalle de venta";
        $contenido="query_agregar_detalle_ventas.php";
        $page="ordenes.php";
    break;
    
    case 40:
        $titulo_contenido="Nueva entrega";
        $contenido="tabla_ventas_domicilio.php";
        $page="entregas.php";
    break;

    case 41:
        $titulo_contenido="Nueva entrega";
        $contenido="form_agregar_entrega.php";
        $page="entregas.php";
    break;
    
    case 42:
        $titulo_contenido="Nueva entrega";
        $contenido="query_agregar_entrega.php";
        $page="entregas.php";
    break;
    
    case 43:
        $titulo_contenido="Entrega terminada";
        $contenido="query_editar_entrega.php";
        $page="entregas.php";
    break;
    
    case 44:
        $titulo_contenido="Venta confirmada";
        $contenido="query_confirmar_venta.php";
        $page="ordenes.php";
    break;
    
    case 45:
        $titulo_contenido="Editar detalle de venta";
        $contenido="form_editar_detalle_venta.php";
        $page="ordenes.php";
    break;
    
    case 46:
        $titulo_contenido="Editar detalle de venta";
        $contenido="query_editar_detalle_venta.php";
        $page="ordenes.php";
    break;
    
    case 47:
        $titulo_contenido="Detalle de venta";
        $contenido="tabla_detalles_ventas_terminadas.php";
        $page="ventas.php";
    break;
    
    case 48:
        $titulo_contenido="Venta eliminada";
        $contenido="query_eliminar_venta.php";
        $page="ordenes.php";
    break;
    
    case 49:
        $titulo_contenido="Detalle venta";
        $contenido="query_eliminar_detalle_venta.php";
        $page="ordenes.php";
    break;
    
    case 50:
        $titulo_contenido="Editar producto";
        $contenido="form_editar_producto.php";
        $page="productos.php";
    break;
    
    case 51:
        $titulo_contenido="Editar producto";
        $contenido="query_editar_producto.php";
        $page="productos.php";
    break;
    
    case 52:
        $titulo_contenido="Editar ingrediente";
        $contenido="form_editar_ingrediente.php";
        $page="productos.php";
    break;
    
    case 53:
        $titulo_contenido="Ingrediente modificado";
        $contenido="query_editar_ingrediente.php";
        $page="productos.php";
    break;
    
    case 54:
        $titulo_contenido="Ingrediente eliminado";
        $contenido="query_eliminar_ingrediente.php";
        $page="productos.php";
    break;
    
    case 55:
        $titulo_contenido="Editar existencia";
        $contenido="form_editar_almacen.php";
        $page="almacen.php";
    break;
    
    case 56:
        $titulo_contenido="Editar existencia";
        $contenido="query_editar_almacen.php";
        $page="almacen.php";
    break;

}

?>