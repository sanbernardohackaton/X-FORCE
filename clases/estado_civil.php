<?php

class estado_civil 
{
    private $id_estado_civil;
    private $descripcion_estado_civil;
    private $activo_estado_civil;

    public function __construct($arg_id_estado_civil="", $arg_descripcion_estado_civil="", $arg_activo_estado_civil="") 
    {
        $this->id_estado_civil=$arg_id_estado_civil; 
        $this->descripcion_estado_civil=$arg_descripcion_estado_civil;
        $this->activo_estado_civil=$arg_activo_estado_civil;
    }

    public function getId_estado_civil()
    {
        return $this->id_estado_civil;
    }
    public function setId_estado_civil()
    {
        $this->id_estado_civil= $id_estado_civil;
    }

    public function getDescripcion_estado_civil()
    {
       return  $this->descripcion_estado_civil;
    }

    public function setDescripcion_estado_civil()
    {
        $this->descripcion_estado_civil= $descripcion_estado_civil;
    }

    public function getActivo_estado_civil()
    {
       return  $this->activo_estado_civil;
    }

    public function setActivo_estado_civil()
    {
        $this->activo_estado_civil= $activo_estado_civil;
    }
}


?>