<?php
include_once('tipo_educacion.php'); 
include_once('conexion.php'); 

class Tipo_educacion_modelo
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

	public function BuscarTipo_educacion($id)
	{
		try
		{
			$sql = "SELECT * FROM tipo_educacion WHERE descripcion_tipo_educacion = ?";
			$stm = $this -> getConexion()-> getPDO() -> prepare($sql)->execute(
				array($id));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$tipo_educacion = new Tipo_educacion($r->id_tipo_educacion,
			                     $r->descripcion_tipo_educacion,
			                     $r->activo_tipo_educacion);
			return $tipo_educacion;
		}
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function ListarTipo_educacion()
	{
		try 
		{
			$resultado = array();
			$sql = "SELECT * FROM tipo_educacion";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$tipo_educacion= new Tipo_educacion($r->id_tipo_educacion, $r->descripcion_tipo_educacion,
				    $r->activo_tipo_educacion);
				$resultado[]=$tipo_educacion;
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