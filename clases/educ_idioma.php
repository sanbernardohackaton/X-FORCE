<?php

class educ_idioma
{

        private $id_educ_idioma;
        private $descripcion_educ_idioma;
        private $id_idioma_educ_idioma;
        private $id_nivel_educ_idioma;
        private $id_visitante_educ_superior;


        public function __construct($arg_id_educ_idioma="", $arg_descripcion_educ_idioma="", $arg_id_idioma_educ_idioma="", $arg_id_nivel_educ_idioma="",  $arg_id_visitante_educ_superior="") 
        {
        $this->id_educ_idioma=$arg_id_educ_idioma; 
        $this->descripcion_educ_idioma=$arg_descripcion_educ_idioma;
        $this->id_idioma_educ_idioma=$arg_id_idioma_educ_idioma;
        $this->id_nivel_educ_idioma=$arg_id_nivel_educ_idioma; 
        $this->id_visitante_educ_superior=$arg_id_visitante_educ_superior; 
 


        }

        public function getId_educ_idioma()
    {
        return $this->id_educ_idioma;
    }
    public function setId_educ_idioma()
    {
        $this->id_educ_idioma= $id_educ_idioma;
    }
    public function getDescripcion_educ_idioma()
    {
        return $this->descripcion_educ_idioma;
    }
    public function setDescripcion_educ_idioma()
    {
        $this-descripcion_educ_idiomaa= $descripcion_educ_idioma;
    }
    public function getId_idioma_educ_idioma()
    {
        return $this->id_idioma_educ_idioma;
    }
    public function setId_idioma_educ_idioma()
    {
        $this->id_idioma_educ_idioma= $id_idioma_educ_idioma;
    }
    public function getId_nivel_educ_idioma()
    {
        return $this->id_nivel_educ_idioma;
    }
    public function setId_nivel_educ_idioma()
    {
        $this->id_nivel_educ_idioma= $id_nivel_educ_idioma;
    }
    public function getId_visitante_educ_superior()
    {
        return $this->id_visitante_educ_superior;
    }
    public function setId_visitante_educ_superior()
    {
        $this->id_visitante_educ_superior= $id_visitante_educ_superior;
    }
}
?>