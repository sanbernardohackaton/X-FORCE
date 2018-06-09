<?php
 include_once('educ_idioma.php');
 include_once('conexion.php');

class Educ_idioma_modelo
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

	public function Registrar(Educ_idioma $educ_idioma)
	{
		try 
		{
			$sql = "INSERT INTO educ_idioma(id_educ_idioma, descripcion_educ_idioma, id_idioma_educ_idioma, id_nivel_educ_idioma, id_visitante_educ_superior) VALUES(?,?,?,?,?)";
			$this -> getConexion()->getPdo()->prepare($sql)->execute(
				array(
					$educ_idioma -> getId_educ_idioma(),
					$educ_idioma -> getDescripcion_educ_idioma(),
                    $educ_idioma -> getId_idioma_educ_idioma(),
                    $educ_idioma -> getId_nivel_educ_idioma(),
					$educ_idioma -> getId_visitante_educ_superior()
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
			$sql = "SELECT * FROM educ_idioma";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$educ_idioma = new Educ_idioma($r->id_educ_idioma, $r->descripcion_educ_idioma, $r->id_idioma_educ_idioma, $r->id_nivel_educ_idioma, $r->id_visitante_educ_superior);
				$resultado[]=$educ_idioma;
			}
			return $resultado;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Buscar($id_educ_idioma)
	{
		try 
		{
			$sql = "SELECT * FROM educ_idioma WHERE id_educ_idioma = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($id_educ_idioma));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$educ_idioma = new Educ_idioma($r->id_educ_idioma, $r->descripcion_educ_idioma, $r->id_idioma_educ_idioma, $r->id_nivel_educ_idioma, $r->id_visitante_educ_superior);
			return $educ_idioma;
		}
		 catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_educ_idioma)
	{
		try 
		{
			$sql = "DELETE FROM educ_idioma WHERE id_educ_idioma = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($id_educ_idioma));
			echo "Elimina3";
		} 
		catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Educ_idioma $educ_idioma)
	{
		try 
		{
			$sql = "UPDATE educ_idioma SET descripcion_educ_idioma = ?, id_idioma_educ_idioma = ?, id_nivel_educ_idioma = ?, id_visitante_educ_superior = ? WHERE id_educ_idioma = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($educ_idioma->getDescripcion_educ_idioma(), $educ_idioma->getId_idioma_educ_idioma(), $educ_idioma->getId_nivel_educ_idioma(), $educ_idioma->getId_visitante_educ_superior(), $educ_idioma->getId_educ_idioma()));
			echo"Actualizado";
		}
		 catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}