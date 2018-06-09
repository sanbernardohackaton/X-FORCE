<?php
class postulacion
{

        private $id_postulacion;
        private $id_oferta_postulacion;
        private $id_visitante_postulacion;
        private $fecha;

        public function __construct($arg_id_postulacion="", $arg_id_oferta_postulacion="", $arg_id_visitante_postulacion="", $arg_fecha="") 
        {
        $this->id_postulacion=$arg_id_postulacion; 
        $this->id_oferta_postulacion=$arg_id_oferta_postulacion;
        $this->id_visitante_postulacion=$arg_id_visitante_postulacion;
        $this->fecha=$arg_fecha; 

    }
    
        public function getId_postulacion()
    {
        return $this->id_postulacion;
    }
    public function setId_postulacion()
    {
        $this->id_postulacion= $id_postulacion;
    }
    public function getId_oferta_postulacion()
    {
        return $this->id_oferta_postulacion;
    }
    public function setId_oferta_postulacion()
    {
        $this->id_oferta_postulacion= $id_oferta_postulacion;
    }
    public function getId_visitante_postulacion()
    {
        return $this->id_visitante_postulacion;
    }
    public function setId_visitante_postulacion()
    {
        $this->id_visitante_postulacion= $id_visitante_postulacion;
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    public function setFecha()
    {
        $this->fecha= $fecha;
    }
}
?>