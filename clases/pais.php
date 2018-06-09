<?php

class pais 
{
    private $id_pais;
    private $descripcion_pais;
    private $activo_pais;

    public function __construct($arg_id_pais="", $arg_descripcion_pais="", $arg_activo_pais="") 
    {
        $this->id_pais=$arg_id_pais; 
        $this->descripcion_pais=$arg_descripcion_pais;
        $this->activo_pais=$arg_activo_pais;
    }

    public function getId_pais()
    {
        return $this->id_pais;
    }
    public function setId_pais()
    {
        $this->id_pais= $id_pais;
    }

    public function getDescripcion_pais()
    {
       return  $this->descripcion_pais;
    }

    public function setDescripcion_pais()
    {
        $this->descripcion_pais= $descripcion_pais;
    }

    public function getActivo_pais()
    {
       return  $this->activo_pais;
    }

    public function setActivo_pais()
    {
        $this->activo_pais= $activo_pais;
    }
}


?>