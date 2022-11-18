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

        public function getById($id){
            $item = new Alumno();
            
            $query = $this->db->connect()->prepare("SELECT * FROM alumnos WHERE matricula = :matricula");

            try {
                $query->execute(['matricula' => $id]);

                while($row = $query->fetch()){
                    $item->matricula = $row['matricula'];
                    $item->nombre = $row['nombre'];
                    $item->apellido = $row['apellido'];
                }
                return $item;

            } catch (PDOException $e) {
                //throw $th;
                return null;
            }
        }

        public function update($item){
            $query = $this->db->connect()->prepare("UPDATE alumnos SET nombre = :nombre, apellido = :apellido WHERE matricula = :matricula");

            try {
                $query->execute([
                    'matricula' => $item['matricula'],
                    'nombre'    => $item['nombre'],
                    'apellido'  => $item['apellido']
                ]);
                return true;

            } catch (PDOException $e) {
                return false;
            }
        }

        public function delete($id){
            $query = $this->db->connect()->prepare("DELETE FROM alumnos WHERE matricula = :id");

            try {
                $query->execute([
                    'id' => $id
                ]);
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }

        }
    }

?>