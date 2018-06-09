<?php
 include_once('cargo.php');
 include_once('conexion.php');

class Cargo_modelo
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

    
    public function Buscar($id_cargo)
	{
		try 
		{
			$sql = "SELECT * FROM cargo WHERE id_cargo = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($id_cargo));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$cargo = new Cargo($r->id_cargo, $r->descripcion_cargo, $r->activo_cargo);
			return $cargo;
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
			$sql = "SELECT * FROM cargo";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$cargo = new Cargo($r->id_cargo, $r->descripcion_cargo, $r->activo_cargo);
				$resultado[]=$cargo;
			}
			return $resultado;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}