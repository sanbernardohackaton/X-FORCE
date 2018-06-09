<?php
include_once('postulacion.php'); 
include_once('conexion.php'); 

class Postulacion_modelo
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

	public function AgregarPostulacion(Postulacion $postulacion)
	{
		try
		{
			$sql = "INSERT INTO postulacion VALUES(?,?,?,?)";
			$this -> getConexion()-> getPDO() -> prepare($sql)->execute(
				array(
					$postulacion -> getId_postulacion(),
					$postulacion -> getId_oferta_postulacion(),
					$postulacion -> getId_visitante_postulacion(),
					$postulacion -> getFecha()));

				echo "Agregado exitosamente";
		}
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function BuscarPostulacion($id)
	{
		try
		{
			$sql = "SELECT * FROM postulacion WHERE id_postulacion = ?";
			$stm = $this -> getConexion()-> getPDO() -> prepare($sql)->execute(
				array($id));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$postulacion = new Postulacion(
			                     $r->id_postulacion,
			                     $r->id_oferta_postulacion,
			                     $r->id_visitante_postulacion,
			                     $r->fecha;
			return $postulacion;
		}
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function ListarPostulacion()
	{
		try 
		{
			$resultado = array();
			$sql = "SELECT * FROM postulacion";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$postulacion = new Postulacion(
			                     $r->id_postulacion,
			                     $r->id_oferta_postulacion,
			                     $r->id_visitante_postulacion,
			                     $r->fecha;
				$resultado[]=$postulacion;
			}
			return $resultado;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function EliminarPostulacion($run)
	{
		try 
		{
			$sql = "DELETE FROM postulacion WHERE id_postulacion = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($run));
			echo "Eliminado";
		} 
		catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}

?>