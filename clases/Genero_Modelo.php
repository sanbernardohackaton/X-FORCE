<?php
 include_once('genero.php');
 include_once('conexion.php');

class Genero_modelo
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
			$sql = "SELECT * FROM genero";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$genero = new Genero($r->id_genero, $r->descripcion_genero, $r->activo_genero);
				$resultado[]=$genero;
			}
			return $resultado;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_genero)
	{
		try 
		{
			$sql = "SELECT * FROM genero WHERE id_genero = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($run));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$genero = new Genero($r->id_genero, $r->descripcion_genero, $r->activo_genero);
			return $genero;
		}
		 catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	
}