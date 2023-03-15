
<?php
require_once 'controller/producto.controller.php';

// Ruta del proyecto, cambiala por la ruta que vas a usar
define( 'RUTA_HTTP', 'http://' . $_SERVER['HTTP_HOST'] . '/tutoriales/mega-crud/' );

// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c'])){
    $controller = new ProductoController();
    $controller->Home();    
} else {
    
    // Obtenemos el controlador que queremos cargar
    $controller = $_REQUEST['c'] . 'Controller';
    $accion     = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Home';
    
    
    // Instanciamos el controlador
    $controller = new $controller();
    
    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}