<?php

class idioma 
{
    private $id_idioma;
    private $descripcion_idioma;
    private $activo_idioma;

    public function __construct($arg_id_idioma="", $arg_descripcion_idioma="", $arg_activo_idioma="") 
    {
        $this->id_idioma=$arg_id_idioma; 
        $this->descripcion_idioma=$arg_descripcion_idioma;
        $this->activo_idioma=$arg_activo_idioma;
    }

    public function getId_idioma()
    {
        return $this->id_idioma;
    }
    public function setId_idioma()
    {
        $this->id_idioma= $id_idioma;
    }

    public function getDescripcion_idioma()
    {
       return  $this->descripcion_idioma;
    }

    public function setDescripcion_idioma()
    {
        $this->descripcion_idioma= $descripcion_idioma;
    }

    public function getActivo_idioma()
    {
       return  $this->activo_idioma;
    }

    public function setActivo_idioma()
    {
        $this->activo_idioma= $activo_idioma;
    }
}


?>