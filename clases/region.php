<?php

class region 
{
    private $id_region;
    private $descripcion_region;
    private $id_region_pais;
    private $activo_region;

    public function __construct($arg_id_region="", $arg_descripcion_region="", $arg_id_region_pais="", $arg_activo_region="") 
    {
        $this->id_region=$arg_id_region; 
        $this->descripcion_region=$arg_descripcion_region;
        $this->id_region_pais=$arg_id_region_pais;
        $this->activo_region=$arg_activo_region;
    }

    public function getId_region()
    {
        return $this->id_region;
    }
    public function setId_region()
    {
        $this->id_region= $id_region;
    }

    public function getDescripcion_region()
    {
       return  $this->descripcion_region;
    }

    public function setDescripcion_region()
    {
        $this->descripcion_region= $descripcion_region;
    }

    public function getId_region_pais()
    {
        return $this->id_region_pais;
    }
    public function setId_region_pais()
    {
        $this->id_region_pais= $id_region_pais;
    }

    public function getActivo_region()
    {
       return  $this->activo_region;
    }

    public function setActivo_region()
    {
        $this->activo_region= $activo_region;
    }
}


?>