<?php

class habilidad
{

        private $id_habilidad;
        private $descripcion_habilidad;
        private $id_nivel_habilidad;
        private $id_visitante_habilidad;


        public function __construct($arg_id_habilidad="", $arg_descripcion_habilidad="", $arg_id_nivel_habilidad="", $arg_id_visitante_habilidad="") 
        {
        $this->id_habilidad=$arg_id_habilidad; 
        $this->descripcion_habilidad=$arg_descripcion_habilidad;
        $this->id_nivel_habilidad=$arg_id_nivel_habilidad;
        $this->id_visitante_habilidad=$arg_id_visitante_habilidad; 

        }

        public function getId_habilidad()
    {
        return $this->id_habilidad;
    }
    public function setId_habilidad()
    {
        $this->id_habilidad= $id_habilidad;
    }
    public function getDescripcion_habilidad()
    {
        return $this->descripcion_habilidad;
    }
    public function setDescripcion_habilidad()
    {
        $this->descripcion_habilidad= $descripcion_habilidad;
    }
    public function getId_nivel_habilidad()
    {
        return $this->id_nivel_habilidad;
    }
    public function setId_nivel_habilidad()
    {
        $this->id_nivel_habilidad= $id_nivel_habilidad;
    }
    public function getId_visitante_habilidad()
    {
        return $this->id_visitante_habilidad;
    }
    public function setId_visitante_habilidad()
    {
        $this->id_visitante_habilidad= $id_visitante_habilidad;
    }
}
?>