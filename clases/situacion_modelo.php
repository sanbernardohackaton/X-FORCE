<?php
include_once('situacion.php'); 
include_once('conexion.php'); 

class Situacion_modelo
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

	public function BuscarSituacion($id)
	{
		try
		{
			$sql = "SELECT * FROM situacion WHERE descripcion_situacion = ?";
			$stm = $this -> getConexion()-> getPDO() -> prepare($sql)->execute(
				array($id));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$situacion = new Situacion($r->id_situacion,
			                     $r->descripcion_situacion,
			                     $r->activo_situacion);
			return $situacion;
		}
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function ListarSituacion()
	{
		try 
		{
			$resultado = array();
			$sql = "SELECT * FROM situacion";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$situacion= new Situacion($r->id_situacion, $r->descripcion_situacion,
				    $r->activo_situacion);
				$resultado[]=$situacion;
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