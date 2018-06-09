<?php

class situacion 
{
    private $id_situacion;
    private $descripcion_situacion;
    private $activo_situacion;

    public function __construct($arg_id_situacion="", $arg_descripcion_situacion="", $arg_activo_situacion="") 
    {
        $this->id_situacion=$arg_id_situacion; 
        $this->descripcion_situacion=$arg_descripcion_situacion;
        $this->activo_situacion=$arg_activo_situacion;
    }


    public function getId_situacion()
    {
        return $this->id_situacion;
    }
    public function setId_situacion()
    {
        $this->id_situacion= $id_situacion;
    }

    public function getDescripcion_situacion()
    {
       return  $this->descripcion_situacion;
    }

    public function setDescripcion_situacion()
    {
        $this->descripcion_situacion= $descripcion_situacion;
    }

    public function getActivo_situacion()
    {
       return  $this->activo_situacion;
    }

    public function setActivo_situacion()
    {
        $this->activo_situacion= $activo_situacion;
    }

}


?>