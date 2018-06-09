<?php
include_once('region.php'); 
include_once('conexion.php'); 

class Region_modelo
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

	public function BuscarRegion($id)
	{
		try
		{
			$sql = "SELECT * FROM region WHERE descripcion_region = ?";
			$stm = $this -> getConexion()-> getPDO() -> prepare($sql)->execute(
				array($id));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$region = new Region($r->id_region,
			                     $r->descripcion_region,
			                     $r->activo_region);
			return $region;
		}
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function ListarRegion()
	{
		try 
		{
			$resultado = array();
			$sql = "SELECT * FROM region";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$region= new Region($r->id_region, $r->descripcion_region,
				    $r->activo_region);
				$resultado[]=$region;
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