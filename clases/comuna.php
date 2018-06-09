<?php

class comuna 
{
    private $id_comuna;
    private $descripcion_comuna;
    private $id_provincia_comuna;
    private $activo_comuna;

    public function __construct($arg_id_comuna="", $arg_descripcion_comuna="", $arg_id_provincia_comuna="",$arg_activo_comuna="") 
    {
        $this->id_comuna=$arg_id_comuna; 
        $this->descripcion_comuna=$arg_descripcion_comuna;
        $this->id_provincia_comuna=$arg_id_provincia_comuna;
        $this->activo_comuna=$arg_activo_comuna;
    }

    public function getId_comuna()
    {
        return $this->id_comuna;
    }
    public function setId_comuna()
    {
        $this->id_comuna= $id_comuna;
    }

    public function getDescripcion_comuna()
    {
       return  $this->descripcion_comuna;
    }

    public function setDescripcion_comuna()
    {
        $this->descripcion_comuna= $descripcion_comuna;
    }
_
    public function getActivo_comuna()
    {
       return  $this->activo_comuna;
    }

    public function setActivo_comuna()
    {
        $this->activo_comuna= $activo_comuna;
    }

}


?>