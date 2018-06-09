<?php

class genero 
{
    private $id_genero;
    private $descripcion_genero;
    private $activo_genero;

    public function __construct($arg_id_genero="", $arg_descripcion_genero="", $arg_activo_genero="") 
    {
        $this->id_genero=$arg_id_genero; 
        $this->descripcion_genero=$arg_descripcion_genero;
        $this->activo_genero=$arg_activo_genero;
    }

    public function getId_genero()
    {
        return $this->id_genero;
    }
    public function setId_genero()
    {
        $this->id_genero= $id_genero;
    }

    public function getDescripcion_genero()
    {
       return  $this->descripcion_genero;
    }

    public function setDescripcion_genero()
    {
        $this->descripcion_genero= $descripcion_genero;
    }

    public function getActivo_genero()
    {
       return  $this->activo_genero;
    }

    public function setActivo_genero()
    {
        $this->activo_genero= $activo_genero;
    }
}


?>