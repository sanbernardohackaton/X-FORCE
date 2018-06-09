<?php
 include_once('comuna.php');
 include_once('conexion.php');

class Comuna_modelo
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

    
    public function Buscar($id_comuna)
	{
		try 
		{
			$sql = "SELECT * FROM comuna WHERE id_comuna = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($id_comuna));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$comuna = new Comuna($r->id_comuna, $r->descripcion_comuna, $r->id_provincia_comuna, $r->activo_comuna);
			return $comuna;
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
			$sql = "SELECT * FROM comuna";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$comuna = new Comuna($r->id_comuna, $r->descripcion_comuna, $r->id_provincia_comuna, $r->activo_comuna);
				$resultado[]=$comuna;
			}
			return $resultado;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}