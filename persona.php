<?php  
/**
* 
*/
class Persona
{
	protected $_apellido;
	protected $_dni;
	protected $_nombre;
	protected $_sexo;

	function __construct($apellido, $dni, $nombre, $sexo)
	{
		
		$this->_apellido=$apellido;
		$this->_dni=$dni;
		$this->_nombre=$nombre;
		$this->_sexo=$sexo;
	}

	function getApellido()
	{
		echo "const";
		return $this->_apellido;
	}
}


?>