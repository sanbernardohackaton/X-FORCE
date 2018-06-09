<?php
include_once('tipo_oferta.php'); 
include_once('conexion.php'); 

class Tipo_oferta_modelo
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

	public function BuscarTipo_oferta($id)
	{
		try
		{
			$sql = "SELECT * FROM tipo_oferta WHERE descripcion_tipo_oferta = ?";
			$stm = $this -> getConexion()-> getPDO() -> prepare($sql)->execute(
				array($id));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$tipo_oferta = new Tipo_oferta($r->id_tipo_oferta,
			                     $r->descripcion_tipo_oferta,
			                     $r->activo_tipo_oferta);
			return $tipo_oferta;
		}
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function ListarTipo_oferta()
	{
		try 
		{
			$resultado = array();
			$sql = "SELECT * FROM tipo_oferta";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$tipo_oferta= new Tipo_oferta($r->id_tipo_oferta, $r->descripcion_tipo_oferta,
				    $r->activo_tipo_oferta);
				$resultado[]=$tipo_oferta;
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