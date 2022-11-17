<?php
include_once 'models/alumno.php';
    class ConsultaModel extends Model {
        public function __construct()
        {
            parent::__construct();

        }

        public function get()
        {
            $items =[];

            try {
                //code...
                $query = $this->db->connect()->query("SELECT * FROM alumnos");
                while($row = $query->fetch()){
                    $item = new Alumno();
                    $item->matricula = $row['matricula'];
                    $item->nombre = $row['nombre'];
                    $item->apellido = $row['apellido'];
                        array_push($items, $item);
                        //var_dump($item);
                }
                return $items;
            } catch (PDOException $e) {
                //throw $th;
                return [];
            }
        }
    }

?>