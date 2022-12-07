<?php
class Main extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "Mensaje desde el controlador";
        // echo "<p>Nuevo controlador Main</p>";
    }
    function render()
    {
        $this->view->render('main/index');
    }

    function saludo()
    {
        $saludo = "Ejectuaste el metodo saludo";
        echo  $saludo;
    }
}
