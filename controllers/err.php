<?php 

class Err extends Controller{

    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "Hubo un error en la solicitud o no existe la página";
        $this->render();

        //echo "<p>No se encuentra el recurso</p>";
    }
    function render(){
        $this->view->render('err/index');
    }

}

?>