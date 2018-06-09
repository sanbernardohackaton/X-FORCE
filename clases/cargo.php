<?php

class cargo 
{
    private $id_cargo;
    private $descripcion_cargo;
    private $activo_cargo;

    public function __construct($arg_id_region="", $arg_descripcion_cargo="", $arg_activo_cargo="") 
    {
        $this->id_region=$arg_id_region; 
        $this->descripcion_cargo=$arg_descripcion_cargo;
        $this->activo_cargo=$arg_activo_cargo;
    }

    public function getId_cargo()
    {
        return $this->id_region;
    }

    public function setId_cargo()
    {
        $this->id_cargo = $id_cargo;
    }

    public function getDescripcion_cargo()
    {
        return $this->descripcion_cargo;
    }

    public function setDescripcion_cargo()
    {
        $this->descripcion_cargo = $descripcion_cargo;
    }

    public function getActivo_cargo()
    {
        return $this->activo_cargo;
    }

    public function setActivo_cargo()
    {
        $this->activo_cargo = $activo_cargo;
    }
}

?>