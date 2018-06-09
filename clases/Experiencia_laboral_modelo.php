<?php
 include_once('exp_laboral.php');
 include_once('conexion.php');

class Exp_laboral_modelo
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

	public function Registrar(Exp_laboral $exp_laboral)
	{
		try 
		{ru
			$sql = "INSERT INTO exp_laboral(id_exp_laboral,descripcion_exp_laboral,id_cargo_exp_laboral,id_visita_exp_laboral) VALUES(?,?,?,?)";
			$this -> getConexion()->getPdo()->prepare($sql)->execute(
				array(
					$exp_laboral -> getId_exp_laboral(),
					$exp_laboral -> getDescripcion_exp_laboral(),
					$exp_laboral -> getId_cargo_exp_laboral(),
					$exp_laboral -> getId_visita_exp_laboral()
					)
				);
			echo "Experiencia laboral agregada exitosamente";
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
			$sql = "SELECT * FROM exp_laboral";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$exp_laboral = new Exp_laboral($r->id_exp_laboral, $r->descripcion_exp_laboral, $r->id_cargo_exp_laboral, $r->id_visita_exp_laboral);
				$resultado[]=$exp_laboral;
			}
			return $resultado;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_exp_laboral)
	{
		try 
		{
			$sql = "SELECT * FROM exp_laboral WHERE id_exp_laboral = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($run));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$exp_laboral = new Exp_laboral($r->id_exp_laboral, $r->descripcion_exp_laboral, $r->id_cargo_exp_laboral, $r->id_visita_exp_laboral);
			return $exp_laboral;
		}
		 catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_exp_laboral)
	{
		try 
		{
			$sql = "DELETE FROM exp_laboral WHERE id_exp_laboral = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($id_exp_laboral));
			echo "Experiencia laboral eliminada correctamente";
		} 
		catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Exp_laboral $exp_laboral)
	{
		try 
		{
			$sql = "UPDATE exp_laboral SET descripcion_exp_laboral = ?, id_cargo_exp_laboral = ?, id_visita_exp_laboral = ? WHERE id_exp_laboral = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($exp_laboral->getDescripcion_exp_laboral(),          
					$exp_laboral->getId_cargo_exp_laboral(), $exp_laboral->getId_visita_exp_laboral()
						getId_exp_laboral()));
			echo"Experencia laboral  actualizada correctamente";
		}
		 catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}