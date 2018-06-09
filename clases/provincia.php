<?php

class provincia 
{
    private $id_provincia;
    private $descripcion_provincia;
    private $id_region_provincia;

    public function __construct($arg_id_provincia="", $arg_descripcion_provincia="", $arg_id_region_provincia="") 
    {
        $this->id_provincia=$arg_id_provincia; 
        $this->descripcion_provincia=$arg_descripcion_provincia;
        $this->id_region_provincia=$arg_id_region_provincia;
    }

    public function getId_provincia()
    {
        return $this->id_provincia;
    }
    public function setId_provincia()
    {
        $this->id_provincia= $id_provincia;
    }

    public function getDescripcion_provincia()
    {
       return  $this->descripcion_provincia;
    }

    public function setDescripcion_provincia()
    {
        $this->descripcion_provincia= $descripcion_provincia;
    }

    public function getActivo_provincia()
    {
       return  $this->activo_provincia;
    }

    public function setActivo_provincia()
    {
        $this->activo_provincia= $activo_provincia;
    }
}


?>