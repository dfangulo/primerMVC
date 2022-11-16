<?php
    class NuevoModel extends Model {
        public function __construct()
        {
            parent::__construct();
        }

        public function insert()
        {
            //insertar datos en la base de datos
            echo "<br/>Insertar datos";
        }
    }

?>