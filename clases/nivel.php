<?php

class nivel 
{
    private $id_nivel;
    private $descripcion_nivel;
    private $activo_nivel;

    public function __construct($arg_id_nivel="", $arg_descripcion_nivel="", $arg_activo_nivel="") 
    {
        $this->id_nivel=$arg_id_nivel; 
        $this->descripcion_nivel=$arg_descripcion_nivel;
        $this->activo_nivel=$arg_activo_nivel;
    }

    public function getId_nivel()
    {
        return $this->id_nivel;
    }
    public function setId_nivel()
    {
        $this->id_nivel= $id_nivel;
    }

    public function getDescripcion_nivel()
    {
       return  $this->descripcion_nivel;
    }

    public function setDescripcion_nivel()
    {
        $this->descripcion_nivel= $descripcion_nivel;
    }

    public function getActivo_nivel()
    {
       return  $this->activo_nivel;
    }

    public function setActivo_nivel()
    {
        $this->activo_nivel= $activo_nivel;
    }

    public function getId_nivel()
    {
        return $this->id_nivel;
    }
    public function setId_nivel()
    {
        $this->id_nivel= $id_nivel;
    }

    public function getDescripcion_nivel()
    {
       return  $this->descripcion_nivel;
    }

    public function setDescripcion_nivel()
    {
        $this->descripcion_nivel= $descripcion_nivel;
    }

    public function getActivo_nivel()
    {
       return  $this->activo_nivel;
    }

    public function setActivo_nivel()
    {
        $this->activo_nivel= $activo_nivel;
    }
}


?>