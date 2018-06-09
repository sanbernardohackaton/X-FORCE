<?php

class educ_superior
{

        private $id_educ_superior;
        private $institucion_educ_superior;
        private $descripcion_educ_superior;
        private $anio_inicio_postgrado;
        private $anio_termino_postgrado;
        private $id_visitante_educ_superior;
        private $id_situacion_educ_superior;
        private $id_area_conocimiento_educ_superior;

        public function __construct($arg_id_educ_superior="", $arg_institucion_educ_superior="", $arg_descripcion_educ_superior="", $arg_anio_inicio_postgrado="",  $arg_anio_termino_postgrado="", $arg_id_visitante_educ_superior="", $arg_id_situacion_educ_superior="", $arg_id_area_conocimiento_educ_superior="") 
        {
        $this->id_educ_superior=$arg_id_educ_superior; 
        $this->institucion_educ_superior=$arg_institucion_educ_superior;
        $this->descripcion_educ_superior=$arg_descripcion_educ_superior;
        $this->anio_inicio_postgrado=$arg_anio_inicio_postgrado; 
        $this->anio_termino_postgrado=$arg_anio_termino_postgrado; 
        $this->id_visitante_educ_superior=$arg_id_visitante_educ_superior;
        $this->id_situacion_educ_superior=$arg_id_situacion_educ_superior; 
        $this->id_area_conocimiento_educ_superior=$arg_id_area_conocimiento_educ_superior; 


        }
        public function getId_educ_superior()
    {
        return $this->id_educ_superior;
    }
    public function setId_educ_superior()
    {
        $this->id_educ_superior= $id_educ_superior;
    }
    public function getInstitucion_educ_superior()
    {
        return $this->institucion_educ_superior;
    }
    public function setInstitucion_educ_superior()
    {
        $this->institucion_educ_superior= $institucion_educ_superior;
    }
    public function getDescripcion_educ_superior()
    {
        return $this->descripcion_educ_superior;
    }
    public function setDescripcion_educ_superior()
    {
        $this->descripcion_educ_superior= $descripcion_educ_superior;
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
    public function getId_visitante_educ_superior()
    {
        return $this->id_visitante_educ_superior;
    }
    public function setId_visitante_educ_superior()
    {
        $this->id_visitante_educ_superior= $id_visitante_educ_superior;
    }
    public function getId_situacion_educ_superior()
    {
        return $this->id_situacion_educ_superior;
    }
    public function setId_situacion_educ_superior()
    {
        $this->id_situacion_educ_superior= $id_situacion_educ_superior;
    }
    public function getId_area_conocimiento_educ_superior()
    {
        return $this->id_area_conocimiento_educ_superior;
    }
    public function setId_area_conocimiento_educ_superior()
    {
        $this->id_area_conocimiento_educ_superior= $id_area_conocimiento_educ_superior;
    }
}

?>