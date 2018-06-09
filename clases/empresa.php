<?php

class empresa 
{
    private $rut_empresa;
    private $nombre_empresa;
    private $telefono_empresa;
    private $direccion_empresa;
    private $correo_empresa;
    private $id_comuna;

    public function __construct($arg_rut_empresa="", $arg_nombre_empresa="", $arg_telefono_empresa="", $arg_direccion_empresa="", $arg_id_comuna="") 
    {
        $this->rut_empresa=$arg_rut_empresa; 
        $this->nombre_empresa=$arg_nombre_empresa;
        $this->telefono_empresa=$arg_telefono_empresa;
        $this->direccion_empresa=$arg_direccion_empresa; 
        $this->correo_empresa=$arg_correo_empresa;
        $this->id_comuna=$arg_id_comuna;
    }

    public function getRut_empresa()
    {
        return $this->rut_empresa;
    }
    public function setRut_empresa()
    {
        $this->id_rut_empresa= $id_rut_empresa;
    }

    public function getNombre_empresa()
    {
        return $this->nombre_empresa;
    }
    public function setNombre_empresa()
    {
        $this->id_nombre_empresa= $id_nombre_empresa;
    }

    public function getTelefono_empresa()
    {
        return $this->telefono_empresa;
    }
    public function setTelefono_empresa()
    {
        $this->telefono_empresa= $telefono_empresa;
    }


    public function getDireccion_empresa()
    {
        return $this->direccion_empresa;
    }
    public function setDireccion_empresa()
    {
        $this->direccion_empresa= $direccion_empresa;
    }

    public function getCorreo_empresa()
    {
        return $this->correo_empresa;
    }
    public function setCorreo_empresa()
    {
        $this->correo_empresa= $correo_empresa;
    }

    public function getId_comuna()
    id_comuna
        return $this->id_comuna;
    }
    public function setId_comuna()
    {
        $this->id_comuna= $id_comuna;
    }



    
}


?>