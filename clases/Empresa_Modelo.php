<?php
 include_once('empresa.php');
 include_once('conexion.php');

class Empresa_modelo
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

	public function Registrar(Empresa $empresa)
	{
		try 
		{ru
			$sql = "INSERT INTO empresa(rut_empresa,nombre_empresa,telefono_empresa,direccion_empresa,correo_empresa,id_comuna, ) VALUES(?,?,?,?,?,?)";
			$this -> getConexion()->getPdo()->prepare($sql)->execute(
				array(
					$empresa -> getRut_empresa(),
					$empresa -> getNombre_empresa(),
					$empresa -> getTelefono_empresa(),
					$empresa -> getDireccion_empresa(),
					$empresa -> getCorreo_empresa(),
					$empresa -> getId_comuna()
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
			$sql = "SELECT * FROM empresa";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$empresa = new Empresa($r->rut_empresa, $r->nombre_empresa, $r->telefono_empresa, $r->direccion_empresa,$r->correo_empresa, $r->id_comuna);
				$resultado[]=$empresa;
			}
			return $resultado;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Obtener($empresa)
	{
		try 
		{
			$sql = "SELECT * FROM empresa WHERE rut_empresa = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($run));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$empresa = new Empresa($r->rut_empresa, $r->nombre_empresa, $r->telefono_empresa, $r->direccion_empresa,$r->correo_empresa, $r->id_comuna);
			return $empresa;
		}
		 catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($rut_empresa)
	{
		try 
		{
			$sql = "DELETE FROM empresa WHERE rut_empresa = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($rut_empresa));
			echo "Empresa eliminada";
		} 
		catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Empresa $empresa)
	{
		try 
		{
			$sql = "UPDATE empresa SET nombre_empresa = ?, telefono_empresa = ?, direccion_empresa = ?,correo_empresa = ?,id_comuna = ? WHERE rut_empresa = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($empresa->getNombre_empresa(), $empresa->getTelefono_empresa(), $empresa->getDireccion_empresa(), $empresa->getCorreo_empresa(),$empresa-> getId_comuna(),$empresa->getRut_empresa()));
			echo"Actualizado";
		}
		 catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}