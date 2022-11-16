<?php

class App {

   function __construct(){
      //echo "<p> Nueva Aplicacion</p>";
      $url = isset($_GET['url']) ? $_GET['url']: strlen((string)null);
      $url = rtrim($url,'/');
      $url = explode('/', $url);

      if(empty($url[0])){
         $archivoController = 'controllers/main.php';
         require_once $archivoController;
         $controller = new Main();
         return false;
      }

      $archivoController = 'controllers/' . $url[0] . '.php';

      if(file_exists($archivoController)){
         require_once $archivoController;
         $controller = new $url[0];

         if(isset($url[1])){
            $controller->{$url[1]}();
         }
      } else {
         $archivoController = 'controllers/err.php';
         require_once $archivoController;
            $controller = new Err();
      }
   }

}
?>