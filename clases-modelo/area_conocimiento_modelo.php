<?php
 include_once('area_conocimiento.php');
 include_once('conexion.php');

class Area_conocimiento_Modelo
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

    
    public function Buscar($id_area_conocimiento)
	{
		try 
		{
			$sql = "SELECT * FROM area_conocimiento WHERE id_area_conocimiento = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($id_area_conocimiento));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$area_conocimiento = new Area_conocimiento($r->id_area_conocimiento, $r->descripcion_area_conocimiento, $r->activo_area_conocimiento);
			return $area_conocimiento;
		}
		 catch (Exception $e) 
		{
			die($e->getMessage());
		}
    }
    

	public function Listar()
	{
		try 
		{
			$resultado = array();
			$sql = "SELECT * FROM area_conocimiento";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$area_conocimiento = new Area_conocimiento($r->id_area_conocimiento, $r->descripcion_area_conocimiento, $r->activo_area_conocimiento);
				$resultado[]=$area_conocimiento;
			}
			return $resultado;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}