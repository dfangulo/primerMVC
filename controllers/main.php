<?php 
class Main extends Controller{

    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "Mensaje desde el controlador";
        $this->view->render('main/index');
       // echo "<p>Nuevo controlador Main</p>";
    }

    function saludo(){
        $saludo = "Ejectuaste el metodo saludo";
        echo  $saludo;
    }
}

?>