<?php
class Model extends Database
{


public function __construct(){

	parent::__construct('localhost', 'root', '', 'mcds-1');
	parent::connection();
    //parent::disconnect();
}


public function getAllUsers() {
		try {
			$sql = "SELECT * FROM users";
			$stm = $this->conx->prepare($sql);
			$stm->execute();
			return $stm->fetchAll();

		} catch (PDOException $e) {
			echo $e->getMessage();
		}

	}

 public function infoUsuario()
 {
   return array(
         'nombre' => 'Jeremias',
         'edad' => 30,
         'sexo' => 'masculino',
         'apellido' => 'Sprindfield'
         );
  }
}


?>