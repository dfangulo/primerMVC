<?php 
class Nuevo extends Controller{

    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "Mensaje desde el controlador";

       // echo "<p>Nuevo controlador Main</p>";
    }
    function render (){
        $this->view->render('nuevo/index');
    }

    function registrarNuevoAlumno(){
        //$matricula  = $_POST['matricula'];
        $nombre     = $_POST['nombre'];
        $apellido   = $_POST['apellido'];
        //echo "Alumno creado";
        $this->model->insert(['nombre' => $nombre,'apellido' => $apellido]);
    }
}

?>