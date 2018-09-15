<?php

class Controller 
{
   public $load;
   public $model;

   function __construct() 
   {
     $this->load = new Load();
     $this->model = new Model();

     if(isset($_GET['page']))
     {
       if($_GET['page'] == 'add'){
          $this->add();
        }
       if($_GET['page'] == 'show'){
          $this->show($_GET['id']);
        }

     }
      else{
       $this->inicio();
     }
      
   }


   ///metodo que carga la vista
   function inicio() 
   {
    //$datos = $this->model->infoUsuario();
     $datos = $this->model->getAllUsers();
     $this->load->view('home.php', $datos);
   }


   public function add() {
    if($_POST) {
      $firstName   = $_POST['firstName'];
      $lastName    = $_POST['lastName'];
      $email       = $_POST['email'];
      $phoneNumber = $_POST['phoneNumber'];
      $address     = $_POST['address'];
      if ($this->model->addUser($firstName, $lastName, $email, $phoneNumber, $address)) {
        echo "<script> alert('User was added successfully!'); window.location.replace('./'); </script>";


             $_SESSION['status'] = "success";
             $_SESSION['message'] = "User was adedd successfully!";
             header('location: ./');

      } else {
        echo "<script> alert('User wasn't added successfully!'); window.location.replace('./'); </script>";

             $_SESSION['status'] = "error";
             $_SESSION['message'] = "User wasn't added successfully!";
             header('location: ./');


      }
      
    }
    $this->load->view('users/add.php');
  }

 public function show($id)
 {
  $datos = $this->model->getUser($id);
  $this->load->view('users/show.php', $datos);
 }

}
?>


