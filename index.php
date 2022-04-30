

    <?php
    include_once 'controller/control.php';
    include_once 'config/conexion.php';
    $controller=new control();
    if (!isset($_REQUEST['c'])){ //no hay peticion 
        $controller->index();
    }else{
        $action=$_REQUEST['c'];
        /*sentencia que ayudara a buscar la funcion en la clase control
        por medio por medio del parametro action*/
        call_user_func(array($controller,$action));
    }
    ?>

