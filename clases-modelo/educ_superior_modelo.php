<?php
 include_once('educ_superior.php');
 include_once('conexion.php');

class Educ_superior_modelo
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

	public function Registrar(Educ_superior $educ_superior)
	{
		try 
		{
			$sql = "INSERT INTO educ_superior(id_educ_superior, institucion_educ_superior, descripcion_educ_superior, descripcion_educ_superior, anio_inicio_postgrado, anio_termino_postgrado, id_visitante_educ_superior, id_situacion_educ_superior, id_area_conocimiento_educ_superior) VALUES(?,?,?,?,?,?,?,?)";
			$this -> getConexion()->getPdo()->prepare($sql)->execute(
				array(
                    $educ_superior -> getId_educ_superior(),
                    $educ_superior -> getInstitucion_educ_superiror(),
					$educ_superior -> getDescripcion_educ_superior(),
                    $educ_superior -> getAnio_inicio_postgrado(),
                    $educ_superior -> getAnio_termino_postgrado(),
                    $educ_superior -> getId_visitante_educ_superior(),
                    $educ_superior -> getId_situacion_educ_superior(),
                    $educ_superior -> getId_area_conocimiento_educ_superior()
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
			$sql = "SELECT * FROM educ_superior";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$educ_superior = new Educ_superior($r->id_educ_superior, $r->institucion_educ_superior, $r->descripcion_educ_superior, $r->anio_inicio_postgrado, $r->anio_termino_postgrado, $r->id_visitante_educ_superior, $r->id_situacion_educ_superior, $r->id_area_conocimiento_educ_superior);
				$resultado[]=$educ_superior;
			}
			return $resultado;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Buscar($id_educ_superior)
	{
		try 
		{
			$sql = "SELECT * FROM educ_superior WHERE id_educ_superior = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($id_educ_superior));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$educ_superior = new Educ_superior($r->id_educ_superior, $r->institucion_educ_superior, $r->descripcion_educ_superior, $r->anio_inicio_postgrado, $r->anio_termino_postgrado, $r->id_visitante_educ_superior, $r->id_situacion_educ_superior, $r->id_area_conocimiento_educ_superior);
			return $educ_superior;
		}
		 catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_educ_superior)
	{
		try 
		{
			$sql = "DELETE FROM educ_superior WHERE id_educ_superior = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($id_educ_superior));
			echo "Elimina3";
		} 
		catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Educ_superior $educ_superior)
	{
		try 
		{
			$sql = "UPDATE educ_superior SET institucion_educ_superior = ?, descripcion_educ_superior = ?, anio_inicio_postgrado = ?, anio_termino_postgrado = ?, id_visitante_educ_superior = ?, id_situacion_educ_superior= ?, id_area_conocimiento_educ_superior = ? WHERE id_educ_superior = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($educ_superior->getInstitucion_educ_superior(), $educ_superior->getDescripcion_educ_superior(), $educ_superior->getAnio_inicio_postgrado(), $educ_superior->getAnio_termino_postgrado(), $educ_superior->getId_visitante_educ_superior(), $educ_superior->getId_situacion_educ_superior(), $educ_superior->getId_area_conocimiento_educ_superior(), $educ_superior->getId_educ_superior()));
			echo"Actualizado";
		}
		 catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}