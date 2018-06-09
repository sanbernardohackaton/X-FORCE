<?php
include_once('visitante.php'); 
include_once('conexion.php'); 

class Visitante_modelo
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

	public function AgregarVisitante(Visitante $visitante)
	{
		try
		{
			$sql = "INSERT INTO visitante VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$this -> getConexion()-> getPDO() -> prepare($sql)->execute(
				array(
					$visitante -> getRun_visitante(),
					$visitante -> getDv_visitante(),
					$visitante -> getNombres_visitante(),
					$visitante -> getId_geneto_visitante(),
					$visitante -> getId_estado_civil_visitante(),
					$visitante -> getAppaterno_visitante(),
					$visitante -> getApmaterno_visitate(),
					$visitante -> getFecha_nacimiento_visitante(),
					$visitante -> getCorreo_visitante(),
					$visitante -> getFono_contacto_visitante(),
					$visitante -> getDireccion_visitante(),
					$visitante -> getId_region_visitante(),
					$visitante -> getId_provincia_visitante(),
					$visitante -> getId_comuna_visitante()));

				echo "Agregado exitosamente";
		}
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function BuscarVisitante($id)
	{
		try
		{
			$sql = "SELECT * FROM visitante WHERE run_visitante = ?";
			$stm = $this -> getConexion()-> getPDO() -> prepare($sql)->execute(
				array($id));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$visitante = new Visitante(
			                     $r->run_visitante,
			                     $r->dv_visitante,
			                     $r->nombres_visitante,
			                     $r->id_genero_visitante,
			                     $r->id_estado_civil_visitante,
			                     $r->appaterno_visitante,
			                     $r->apmaterno_visitante,
			                     $r->fecha_nacimiento_visitante,
			                     $r->correo_visitante,
			                     $r->fono_contacto_visitante,
			                     $r->direccion_visitante,
			                     $r->id_region_visitante,
			                     $r->id_provincia_visitante,
			                     $r->id_comuna_visitante);
			return $visitante;
		}
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function ListarVisitante()
	{
		try 
		{
			$resultado = array();
			$sql = "SELECT * FROM visitante";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$visitante = new Visitante(
			                     $r->run_visitante,
			                     $r->dv_visitante,
			                     $r->nombres_visitante,
			                     $r->id_genero_visitante,
			                     $r->id_estado_civil_visitante,
			                     $r->appaterno_visitante,
			                     $r->apmaterno_visitante,
			                     $r->fecha_nacimiento_visitante,
			                     $r->correo_visitante,
			                     $r->fono_contacto_visitante,
			                     $r->direccion_visitante,
			                     $r->id_region_visitante,
			                     $r->id_provincia_visitante,
			                     $r->id_comuna_visitante);
				$resultado[]=$visitante;
			}
			return $resultado;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function EliminarVisitante($run)
	{
		try 
		{
			$sql = "DELETE FROM visitante WHERE run_visitante = ?";
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