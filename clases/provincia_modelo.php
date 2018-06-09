<?php
include_once('provincia.php'); 
include_once('conexion.php'); 

class Provincia_modelo
{
	private $conexion;

	public function __construct()
	{
		$this -> setConexion(new Conexion());
	}

	public function setConexion($conexion)
	{
		$this -> conexion = $conexion;
	}

	public function getConexion()
	{
		return $this -> conexion;
	}

	public function BuscarProvincia($id)
	{
		try
		{
			$sql = "SELECT * FROM provincia WHERE descripcion_provincia = ?";
			$stm = $this -> getConexion()-> getPDO() -> prepare($sql)->execute(
				array($id));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$provincia = new Provincia($r->id_provincia,
			                     $r->descripcion_provincia,
			                     $r->id_region_provincia,
			                     $r->activo_provincia);
			return $provincia;
		}
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function ListarProvincia()
	{
		try 
		{
			$resultado = array();
			$sql = "SELECT * FROM provincia";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$provincia= new Provincia($r->id_provincia, $r->descripcion_provincia,
					$r->id_region_provincia,
				    $r->activo_provincia);
				$resultado[]=$provincia;
			}
			return $resultado;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}

?>