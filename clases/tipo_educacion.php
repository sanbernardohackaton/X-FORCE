<?php

class tipo_educacion 
{
    private $id_tipo_educacion;
    private $descripcion_tipo_educacion;
    private $activo_tipo_educacion;

    public function __construct($arg_id_tipo_educacion="", $arg_descripcion_tipo_educacion="", $arg_activo_tipo_educacion="") 
    {
        $this->id_tipo_educacion=$arg_id_tipo_educacion; 
        $this->descripcion_tipo_educacion=$arg_descripcion_tipo_educacion;
        $this->activo_tipo_educacion=$arg_activo_tipo_educacion;
    }

    public function getId_tipo_educacion()
    {
        return $this->id_tipo_educacion;
    }
    public function setId_tipo_educacion()
    {
        $this->id_tipo_educacion= $id_tipo_educacion;
    }

    public function getDescripcion_tipo_educacion()
    {
       return  $this->descripcion_tipo_educacion;
    }

    public function setDescripcion_tipo_educaciono()
    {
        $this->descripcion_tipo_educacion= $descripcion_tipo_educacion;
    }

    public function getActivo_tipo_educacion()
    {
       return  $this->activo_tipo_educacion;
    }

    public function setActivo_tipo_educacion()
    {
        $this->activo_tipo_educacion= $activo_tipo_educacion;
    }
}


?>