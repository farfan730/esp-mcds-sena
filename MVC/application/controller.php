<?php

class Controller 
{
   public $load;
   public $model;

   function __construct() 
   {
     $this->load = new Load();
     $this->model = new Model();
     $this->inicio();    
   }


   ///metodo que carga la vista
   function inicio() 
   {
     $datos = $this->model->infoUsuario();
     $this->load->view('home.php', $datos);
   }
}

?>


