<?php

class area_conocimiento 
{
    private $id_area_conocimiento;
    private $descripcion_area_conocimiento;
    private $activo_area_conocimiento;

    public function __construct($arg_id_area_conocimiento="", $arg_descripcion_area_conocimiento="", $arg_activo_area_conocimiento="") 
    {
        $this->id_area_conocimiento=$arg_id_area_conocimiento; 
        $this->descripcion_area_conocimiento=$arg_descripcion_area_conocimiento;
        $this->activo_area_conocimiento=$arg_activo_area_conocimiento;
    }


    public function getId_area_conocimiento()
    {
        return $this->id_area_conocimiento;
    }
    public function setId_area_conocimiento()
    {
        $this->id_area_conocimiento= $id_area_conocimiento;
    }

    public function getDescripcion_area_conocimiento()
    {
       return  $this->descripcion_area_conocimiento;
    }

    public function setDescripcion_area_conocimiento()
    {
        $this->descripcion_area_conocimiento= $descripcion_area_conocimiento;
    }

    public function getActivo_area_conocimiento()
    {
       return  $this->activo_area_conocimiento;
    }

    public function setActivo_area_conocimiento()
    {
        $this->activo_area_conocimiento= $activo_area_conocimiento;
    }



}


?>