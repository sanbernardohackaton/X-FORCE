<?php

class tipo_oferta 
{
    private $id_tipo_oferta;
    private $descripcion_tipo_oferta;
    private $activo_tipo_oferta;

    public function __construct($arg_id_tipo_oferta="", $arg_descripcion_tipo_oferta="", $arg_activo_tipo_oferta="") 
    {
        $this->id_tipo_oferta=$arg_id_tipo_oferta; 
        $this->descripcion_tipo_oferta=$arg_descripcion_tipo_oferta;
        $this->activo_tipo_oferta=$arg_activo_tipo_oferta;
    }

    public function getId_tipo_oferta()
    {
        return $this->id_tipo_oferta;
    }
    public function setId_tipo_oferta()
    {
        $this->id_tipo_oferta= $id_tipo_oferta;
    }

    public function getDescripcion_tipo_oferta()
    {
       return  $this->descripcion_tipo_oferta;
    }

    public function setDescripcion_tipo_oferta()
    {
        $this->descripcion_tipo_oferta= $descripcion_tipo_oferta;
    }
    public function getActivo_tipo_oferta()
    {
       return  $this->activo_tipo_oferta;
    }

    public function setActivo_tipo_oferta()
    {
        $this->activo_tipo_oferta= $activo_tipo_oferta;
    }
}


?>