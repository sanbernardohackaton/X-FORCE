<?php
 include_once('habilidad.php');
 include_once('conexion.php');

class Habilidad_modelo
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

	public function Registrar(Habilidad $habilidad)
	{
		try 
		{ru
			$sql = "INSERT INTO habilidad(id_habilidad,descripcion_habilidad,id_nivel_habilidad,id_visitante_habilidad) VALUES(?,?,?,?)";
			$this -> getConexion()->getPdo()->prepare($sql)->execute(
				array(
					$habilidad -> getId_habilidad(),
					$habilidad -> getDescripcion_habilidad(),
					$habilidad -> getId_nivel_habilidad(),
					$habilidad -> getId_visitante_habilidad()
					)
				);
			echo "Habilidad agregada exitosamente";
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
			$sql = "SELECT * FROM habilidad";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$habilidad = new Habilidad($r->id_habilidad, $r->descripcion_habilidad, $r->id_nivel_habilidad, $r->id_visitante_habilidad);
				$resultado[]=$habilidad;
			}
			return $resultado;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_habilidad)
	{
		try 
		{
			$sql = "SELECT * FROM habilidad WHERE id_habilidad = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($run));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$habilidad = new Habilidad($r->id_habilidad, $r->descripcion_habilidad, $r->id_nivel_habilidad, $r->id_visitante_habilidad);
			return $habilidad;
		}
		 catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_habilidad)
	{
		try 
		{
			$sql = "DELETE FROM habilidad WHERE id_habilidad = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($id_habilidad));
			echo "Habilidad eliminada correctamente";
		} 
		catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Habilidad $habilidad)
	{
		try 
		{
			$sql = "UPDATE habilidad SET descripcion_habilidad = ?, id_nivel_habilidad = ?, id_visitante_habilidad = ? WHERE id_habilidad = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($habilidad->getDescripcion_habilidad(),          
					$habilidad->getId_nivel_habilidad(), $habilidad->getId_visitante_habilidad()
						getId_habilidad()));
			echo"Habilidad laboral actualizada correctamente";
		}
		 catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}