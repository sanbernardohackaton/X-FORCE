<?php

class educacion_escolar
{

        private $id_educacion_escolar;
        private $institucion_educacion_escolar;
        private $anio_inicio_educacion_escolar;
        private $anio_termino_educacion_escolar;
        private $id_comuna_educacion_escolar;
        private $id_region_educacion_escolar;
        private $id_visitante_educacion_escolar;

        public function __construct($arg_id_educacion_escolar="", $arg_institucion_educacion_escolar="", $arg_anio_inicio_educacion_escolar="", $arg_anio_termino_educacion_escolar="",  $arg_id_comuna_educacion_escolar="", $arg_id_region_educacion_escolar="", $arg_id_visitante_educacion_escolar="") 
        {
        $this->id_educacion_escolar=$arg_id_educacion_escolar; 
        $this->institucion_educacion_escolar=$arg_institucion_educacion_escolar;
        $this->anio_inicio_educacion_escolar=$arg_anio_inicio_educacion_escolar;
        $this->anio_termino_educacion_escolar=$arg_anio_termino_educacion_escolar; 
        $this->id_comuna_educacion_escolar=$arg_id_comuna_educacion_escolar; 
        $this->id_region_educacion_escolar=$arg_id_region_educacion_escolar;
        $this->id_visitante_educacion_escolar=$arg_id_visitante_educacion_escolar; 

        }

        public function getId_educacion_escolar()
    {
        return $this->id_educacion_escolar;
    }
    public function setId_educacion_escolar()
    {
        $this->id_educacion_escolar= $id_educacion_escolar;
    }
    public function getInstitucion_educacion_escolar()
    {
        return $this->institucion_educacion_escolar;
    }
    public function setInstitucion_educacion_escolar()
    {
        $this->institucion_educacion_escolar= $institucion_educacion_escolar;
    }
    public function getAnio_inicio_educacion_escolar()
    {
        return $this->anio_inicio_educacion_escolar;
    }
    public function setAnio_inicio_educacion_escolar()
    {
        $this->anio_inicio_educacion_escolar= $anio_inicio_educacion_escolar;
    }
    public function getAnio_termino_educacion_escolar()
    {
        return $this->anio_termino_educacion_escolar;
    }
    public function setAnio_termino_educacion_escolar()
    {
        $this->anio_termino_educacion_escolar= $anio_termino_educacion_escolar;
    }
    public function getId_comuna_educacion_escolar()
    {
        return $this->id_comuna_educacion_escolar;
    }
    public function setId_comuna_educacion_escolar()
    {
        $this->id_comuna_educacion_escolar= $id_comuna_educacion_escolar;
    }
     public function getId_region_educacion_escolar()
    {
        return $this->id_region_educacion_escolar;
    }
    public function setId_region_educacion_escolar()
    {
        $this->id_region_educacion_escolar= $id_region_educacion_escolar;
    }
    public function getId_visitante_educacion_escolar()
    {
        return $this->id_visitante_educacion_escolar;
    }
    public function setId_visitante_educacion_escolar()
    {
        $this->id_visitante_educacion_escolar= $id_visitante_educacion_escolar;
    }
}

?>