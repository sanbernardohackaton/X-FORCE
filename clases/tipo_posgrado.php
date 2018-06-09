<?php

class tipo_posgrado 
{
    private $id_tipo_posgrado;
    private $descripcion_tipo_posgrado;
    private $activo_tipo_posgrado;

    public function __construct($arg_id_tipo_posgrado="", $arg_descripcion_tipo_posgrado="", $arg_activo_tipo_posgrado="") 
    {
        $this->id_tipo_posgrado=$arg_id_tipo_posgrado; 
        $this->descripcion_tipo_posgrado=$arg_descripcion_tipo_posgrado;
        $this->activo_tipo_posgrado=$arg_activo_tipo_posgrado;
    }

    public function getId_tipo_posgrado()
    {
        return $this->id_tipo_posgrado;
    }
    public function setId_tipo_posgrado()
    {
        $this->id_tipo_posgrado= $id_tipo_posgrado;
    }

    public function getDescripcion_tipo_posgrado()
    {
       return  $this->descripcion_tipo_posgrado;
    }

    public function setDescripcion_tipo_posgrado()
    {
        $this->descripcion_tipo_posgrado= $descripcion_tipo_posgrado;
    }

    public function getActivo_tipo_posgrado()
    {
       return  $this->activo_tipo_posgrado;
    }

    public function setActivo_tipo_posgrado()
    {
        $this->activo_tipo_posgrado= $activo_tipo_posgrado;
    }


}


?>