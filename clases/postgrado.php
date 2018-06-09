<?php

class postgrado
{

        private $id_postgrado;
        private $institucion_postgrado;
        private $descripcion_postgrado;
        private $anio_inicio_postgrado;
        private $anio_termino_postgrado;
        private $id_pais_postgrado;
        private $id_visitante_educacion_escolar;
        private $id_situacion_postgrado;

        public function __construct($arg_id_postgrado="", $arg_institucion_postgrado="", $arg_descripcion_postgrado="", $arg_anio_inicio_postgrado="",  $arg_anio_termino_postgrado="", $arg_id_pais_postgrado="", $arg_id_visitante_educacion_escolar="", $arg_id_situacion_postgrado="") 
        {
        $this->id_postgrado=$arg_id_postgrado; 
        $this->institucion_postgrado=$arg_institucion_postgrado;
        $this->descripcion_postgrado=$arg_descripcion_postgrado;
        $this->anio_inicio_postgrado=$arg_anio_inicio_postgrado; 
        $this->anio_termino_postgrado=$arg_anio_termino_postgrado; 
        $this->id_pais_postgrado=$arg_id_pais_postgrado;
        $this->id_visitante_educacion_escolar=$arg_id_visitante_educacion_escolar; 
        $this->id_situacion_postgrado=$arg_id_situacion_postgrado; 


        }
        public function getId_postgrado()
    {
        return $this->id_postgrado;
    }
    public function setId_postgrado()
    {
        $this->id_postgrado= $id_postgrado;
    }
    public function getInstitucion_postgrado()
    {
        return $this->institucion_postgrado;
    }
    public function setInstitucion_postgrado()
    {
        $this->institucion_postgrado= $institucion_postgrado;
    }
    public function getDescripcion_postgrado()
    {
        return $this->descripcion_postgrado;
    }
    public function setdescripcion_postgrado()
    {
        $this->descripcion_postgrado= $descripcion_postgrado;
    }
    public function getAnio_inicio_postgrado()
    {
        return $this->anio_inicio_postgrado;
    }
    public function setAnio_inicio_postgrado()
    {
        $this->anio_inicio_postgrado= $anio_inicio_postgrado;
    }
    public function getAnio_termino_postgrado()
    {
        return $this->anio_termino_postgrado;
    }
    public function setAnio_termino_postgrado()
    {
        $this->anio_termino_postgrado= $anio_termino_postgrado;
    }
    public function getId_pais_postgrado()
    {
        return $this->id_pais_postgrado;
    }
    public function setId_pais_postgrado()
    {
        $this->id_pais_postgrado= $id_pais_postgrado;
    }
    public function getId_visitante_educacion_escolar()
    {
        return $this->id_visitante_educacion_escolar;
    }
    public function setId_visitante_educacion_escolar()
    {
        $this->id_visitante_educacion_escolar= $id_visitante_educacion_escolar;
    }
    public function getId_situacion_postgrado()
    {
        return $this->id_situacion_postgrado;
    }
    public function setId_situacion_postgrado()
    {
        $this->id_situacion_postgrado= $id_situacion_postgrado;
    }

}
?>