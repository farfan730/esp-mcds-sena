<?php


//ejercicio agregacion///////////////
/////////////////////////////////////

class Autor
{
	public $nombre;
	public $email;
	

	public function __construct($nombre, $email)
	{
		$this->nombre=$nombre;
		$this->email=$email;
		
	}

	public function getNombre(){
		return $this->nombre;
	}

     public function getEmail(){
		return $this->email;
	}

}


class Libro
{
	public $nombre;
	public $precio;
	public $autor;
	

	public function __construct($nombre, $precio, $autor)
	{
		$this->nombre=$nombre;
		$this->precio=$precio;
		$this->autor=$autor;
		
	}

	public function getNombre(){
		return $this->nombre;
	}

     public function getPrecio(){
		return $this->precio;
	}

	 public function getAutor(){
		return $this->precio;
	}

}




$autor1=new Autor("charles Darl", "db@gmail.com");
$libro1=new libro("codigo da vonci", 24, $autor);

echo "\n\nNombre: ".$libro1->getNombre();
echo "\n\nPrecio".$libro1->getPrecio();
echo "\n\nAutor".$libro1->getAutor()->getNombre();
echo "\n\nemail".$libro1->getAutor()->getEmail();


?>