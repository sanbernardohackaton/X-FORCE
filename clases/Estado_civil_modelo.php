<?php
 include_once('estado_civil.php');
 include_once('conexion.php');

class Estado_civil_modelo
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

	public function Listar()
	{
		try 
		{
			$resultado = array();
			$sql = "SELECT * FROM estado_civil";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$estado_civil = new Estado_civil($r->id_estado_civil, $r->descripcion_estado_civil, $r->activo_estado_civil);
				$resultado[]=$estado_civil;
			}
			return $resultado;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_estado_civil)
	{
		try 
		{
			$sql = "SELECT * FROM estado_civil WHERE id_estado_civil = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($id_estado_civil));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$estado_civil = new Estado_civil($r->id_estado_civil, $r->descripcion_estado_civil, $r->activo_estado_civil);
			return $estado_civil;
		}
		 catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	
}