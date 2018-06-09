<?php
    include_once('adicional.php');
    include_once('conexion.php');

    class Adicional_modelo
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


    public function Buscar($id_adicional)
	{
		try 
		{
			$sql = "SELECT * FROM adicional WHERE id_adicional = ?";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute(array($id_adicional));
			$r = $stm -> fetch(PDO::FETCH_OBJ);
			$adicional = new Adicional($r->id_adicional, $r->descripcion_adicional, $r->anio_inicio_adicional, $r->anio_termino_adicional, $r->id_visitante_adicional);
			return $adicional;
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
			$sql = "SELECT * FROM adicional";
			$stm = $this->getConexion()->getPDO()->prepare($sql);
			$stm -> execute();
			foreach($stm -> fetchALL(PDO::FETCH_OBJ)as $r)
			{
				$adicional = new Adicional($r->id_adicional, $r->descripcion_adicional, $r->anio_inicio_adicional, $r->anio_termino_adicional, $r->id_visitante_adicional);
				$resultado[]=$adicional;
			}
			return $resultado;
		} 
		catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

?>