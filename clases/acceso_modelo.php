<?php
include_once('conexion.php'); 
include_once('acceso.php'); 

class Acceso_modelo
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

	public function AgregarAcceso(Acceso $acceso)
	{
		try
		{
			$sql = "INSERT INTO acceso VALUES(?,?,?)";
			$this -> getConexion()-> getPDO() -> prepare($sql)->execute(
				array(
					$acceso -> getId_acceso(),
					$acceso -> getHora_acceso(),
					$acceso -> getId_visitante_acceso()));

				echo "Agregado exitosamente";
		}
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function ListarAcceso()
	{
		try 
		{
			$resultado = array();
			$sql = "SELECT * FROM acceso";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$acceso= new Acceso($r->id_acceso, $r->hora_acceso,
					$r->id_visitante_acceso);
				$resultado[]=$acceso;
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