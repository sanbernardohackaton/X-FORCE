<?php

class industria 
{
    private $id_industria;
    private $descripcion_industria;
    private $activo_industria;

    public function __construct($arg_id_industria="", $arg_descripcion_industria="", $arg_activo_industria="") 
    {
        $this->id_industria=$arg_id_industria; 
        $this->descripcion_industria=$arg_descripcion_industria;
        $this->activo_industria=$arg_activo_industria;
    }

    public function getId_industria()
    {
        return $this->id_industria;
    }
    public function setId_industria()
    {
        $this->id_industria= $id_industria;
    }

    public function getDescripcion_industria()
    {
       return  $this->descripcion_industria;
    }

    public function setDescripcion_industria()
    {
        $this->descripcion_industria= $descripcion_industria;
    }

    public function getActivo_industria()
    {
       return  $this->activo_industria;
    }

    public function setActivo_industria()
    {
        $this->activo_industria= $activo_industria;
    }
}


?>