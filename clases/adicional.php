<?php

class adicional
{

        private $id_adicional;
        private $descripcion_adicional;
        private $anio_inicio_adicional;
        private $anio_termino_adicional;
        private $id_visitante_adicional;


        public function __construct($arg_id_adicional="", $arg_descripcion_adicional="", $arg_anio_inicio_adicional="", $arg_anio_termino_adicional="",  $arg_id_visitante_adicional="") 
        {
        $this->id_adicional=$arg_id_adicional; 
        $this->descripcion_adicional=$arg_descripcion_adicional;
        $this->anio_inicio_adicional=$arg_anio_inicio_adicional;
        $this->anio_termino_adicional=$arg_anio_termino_adicional; 
        $this->id_visitante_adicional=$arg_id_visitante_adicional; 
 


        }

        public function getId_adicional()
    {
        return $this->id_adicional;
    }
    public function setId_adicional()
    {
        $this->id_adicional= $id_adicional;
    }
    public function getDescripcion_adicional()
    {
        return $this->descripcion_adicional;
    }
    public function setDescripcion_adicional()
    {
        $this->descripcion_adicional= $descripcion_adicional;
    }
    public function getAnio_inicio_adicional()
    {
        return $this->anio_inicio_adicional;
    }
    public function setAnio_inicio_adicional()
    {
        $this->anio_inicio_adicional= $anio_inicio_adicional;
    }
    public function getAnio_termino_adicional()
    {
        return $this->anio_termino_adicional;
    }
    public function setAnio_termino_adicional()
    {
        $this->anio_termino_adicional= $anio_termino_adicional;
    }
    public function getId_visitante_adicional()
    {
        return $this->id_visitante_adicional;
    }
    public function setId_visitante_adicional()
    {
        $this->id_visitante_adicional= $id_visitante_adicional;
    }
}
?>