<?php 
class Consulta extends Controller{

    function __construct()
    {
        parent::__construct();
        $this->view->alumnos = [];
       // echo "<p>Nuevo controlador Main</p>";
    }
    function render (){
        $alumnos =  $this->model->get();
        $this->view->alumnos = $alumnos;
        $this->view->render('consulta/index');
    }
    function verAlumno($param = null) {
        $idAlumno = $param[0];
        $alumno = $this->model->getById($idAlumno);

        session_start();
        $_SESSION['id_verAlumno'] = $alumno->matricula;
        $this->view->alumno = $alumno;
        $this->view->mensaje = "";
        $this->view->render('consulta/detalle');
        
    }

    function actualizarAlumno($param = null) {
        session_start();
        $matricula  = $_SESSION['id_verAlumno'];
        $nombre     = $_POST['nombre'];
        $apellido   = $_POST['apellido'];

        unset($_SESSION['id_verAlumno']);

        if($this->model->update(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])){
            //Actualizar alumno
            $alumno = new Alumno();
            $alumno->matricula  = $matricula;
            $alumno->nombre     = $nombre;
            $alumno->apellido   = $apellido;

            $this->view->alumno = $alumno;
            $this->view->mensaje = "Alumno - $nombre - actualizado correctamente";
        }else{
            // mensaje de error
            $this->view->mensaje = "No se pudo actualizar el Alumno";
        }
        $this->view->render('consulta/detalle');
    }

    function eliminarAlumno($param = null) {
        $matricula = $param[0];

        if($this->model->delete($matricula)){
            //Borrar Alumno
            // $this->view->mensaje = "Alumno eliminado correctamente";
            $mensaje = "Alumno eliminado correctamente";
        }else{
            // mensaje de error
            // $this->view->mensaje = "No se pudo eliminar el Alumno";
            $mensaje = "No se pudo eliminar el Alumno";
        }
        //$this->render();
        echo $mensaje;
    }
}

?>