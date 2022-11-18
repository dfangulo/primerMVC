<?php
    class NuevoModel extends Model {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($datos)
        {
            //insertar datos en la base de datos
            try {
                $query = $this->db->connect()->prepare('INSERT INTO alumnos (nombre, apellido) VALUES (:nombre, :apellido)');
                if($query->execute(['nombre' => $datos['nombre'], 'apellido' => $datos['apellido']])){
                    //echo '<div class="center color-2"> Alumno agregado: '. $datos['nombre'] . ' '. $datos['apellido'] . '</div>';
                }else{
                    echo "error";
                }
            } catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }

?>