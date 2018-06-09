<?php
include_once('tipo_posgrado.php'); 
include_once('conexion.php'); 

class Tipo_posgrado_modelo
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

	public function BuscarTipo_posgrado($id)
	{
		try
		{
			$sql = "SELECT * FROM tipo_postgrado WHERE descripcion_tipo_postgrado = ?";
			$stm = $this -> getConexion()-> getPDO() -> prepare($sql)->execute(
				array($id));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$tipo_posgrado = new Tipo_posgrado($r->id_tipo_postgrado,
			                     $r->descripcion_tipo_postgrado,
			                     $r->activo_tipo_postgrado);
			return $tipo_posgrado;
		}
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function ListarTipo_posgrado()
	{
		try 
		{
			$resultado = array();
			$sql = "SELECT * FROM tipo_postgrado";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$tipo_posgrado= new Tipo_posgrado($r->id_tipo_postgrado, $r->descripcion_tipo_postgrado,
				    $r->activo_tipo_postgrado);
				$resultado[]=$tipo_posgrado;
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