<?php 
class Cuadros extends Controller{

    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "Mensaje desde el controlador"; //ejemplo de pasar variables
       // echo "<p>Nuevo controlador Main</p>";
    }
    function render (){
        $this->view->render('cuadros/index');
    }

}

?>