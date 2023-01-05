<?php
class NuevoModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($datos)
    {
        //insertar datos en la base de datos
        try {
            $query = $this->db->connect()->prepare('INSERT INTO alumnos (nombre, apellido) VALUES (:nombre, :apellido)');
            if ($query->execute(['nombre' => $datos['nombre'], 'apellido' => $datos['apellido']])) {
            } else {
                echo "error";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
