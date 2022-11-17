<?php 
class Cuadros extends Controller{

    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "Mensaje desde el controlador"; //ejemplo de pasar variables
        $this->view->render('cuadros/index');
       // echo "<p>Nuevo controlador Main</p>";
    }

}

?>