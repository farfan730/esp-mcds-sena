<?php


////OJO CON EL ORDEN DE LAS LIBRERIAS..... //////////


//para trabajar con sesiones...variables entre paginas
session_start();


require 'load.php';
require 'database.php';
require 'model.php';
require 'controller.php';
new Controller(); 


?>