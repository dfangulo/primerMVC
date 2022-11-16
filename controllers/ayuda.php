<?php

    class Ayuda extends Controller{

        function __construct()
        {
            parent::__construct();
            $this->view->mensaje = "Ayuda de la pagina";
            $this->view->render('ayuda/index');
        }
    }

?>