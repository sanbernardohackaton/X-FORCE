<?php
 include_once('educacion_escolar.php');
 include_once('conexion.php');

class Educacion_escolar_Modelo
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

	public function Registrar(Educacion_escolar $educacion_escolar)
	{
		try 
		{ru
			$sql = "INSERT INTO educacion_escolar(id_educacion_escolar,institucion_educacion_escolar,anio_inicio_educacion_escolar,anio_termino_educacion_escolar,id_comuna_educacion_escolar,id_region_educacion_escolar,id_visitante_educacion_escolar ) VALUES(?,?,?,?,?,?,?)";
			$this -> getConexion()->getPdo()->prepare($sql)->execute(
				array(
					$educacion_escolar -> getId_educacion_escolar(),
					$educacion_escolar -> getInstitucion_educacion_escolar(),
					$educacion_escolar -> getAnio_inicio_educacion_escolar(),
					$educacion_escolar -> getAnio_termino_educacion_escolar(),
					$educacion_escolar -> getId_comuna_educacion_escolar(),
					$educacion_escolar -> getId_region_educacion_escolar(),
					$educacion_escolar -> getId_visitante_educacion_escolar()
					)
				);
			echo "Agregado exitosamente";
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
			$sql = "SELECT * FROM educacion_escolar";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$educacion_escolar = new Educacion_escolar($r->id_educacion_escolar, $r->institucion_educacion_escolar, $r->anio_inicio_educacion_escolar, $r->anio_termino_educacion_escolar,$r->id_comuna_educacion_escolar, $r->id_region_educacion_escolar,$r->id_visitante_educacion_escolar);
				$resultado[]=$educacion_escolar;
			}
			return $resultado;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_educacion_escolar)
	{
		try 
		{
			$sql = "SELECT * FROM educacion_escolar WHERE id_educacion_escolar = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($run));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$educacion_escolar = new Educacion_escolar($r->id_educacion_escolar, $r->institucion_educacion_escolar, $r->anio_inicio_educacion_escolar, $r->anio_termino_educacion_escolar,$r->id_comuna_educacion_escolar, $r->id_region_educacion_escolar,$r->id_visitante_educacion_escolar);
			return $educacion_escolar;
		}
		 catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_educacion_escolar)
	{
		try 
		{
			$sql = "DELETE FROM educacion_escolar WHERE id_educacion_escolar = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($id_educacion_escolar));
			echo "Educacion escolar eliminada";
		} 
		catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Educacion_escolar $educacion_escolar)
	{
		try 
		{
			$sql = "UPDATE educacion_escolar SET institucion_educacion_escolar = ?, anio_inicio_educacion_escolar = ?, anio_termino_educacion_escolar = ?,id_comuna_educacion_escolar =?,id_region_educacion_escolar = ?,id_visitante_educacion_escolar = ? WHERE id_educacion_escolar = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($educacion_escolar->getInstitucion_educacion_escolar(), $educacion_escolar->getAnio_inicio_educacion_escolar(), $educacion_escolar->getAnio_termino_educacion_escolar(), $educacion_escolar->
				getId_comuna_educacion_escolar(), $educacion_escolar->
				getId_region_educacion_escolar(), $educacion_escolar->
				getId_visitante_educacion_escolar(),$educacion_escolar->
				getId_educacion_escolar()));
			echo"Actualizado";
		}
		 catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}