<?php 

class Err extends Controller{

    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "Hubo un error en la solicitud o no existe la página";
        $this->view->render('err/index');
        //echo "<p>No se encuentra el recurso</p>";
    }

}

?>