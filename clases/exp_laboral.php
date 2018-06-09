<?php

class exp_laboral
{

        private $id_exp_laboral;
        private $descripcion_exp_laboral;
        private $id_cargo_exp_laboral;
        private $id_visita_exp_laboral;

        public function __construct($arg_id_exp_laboral="", $arg_descripcion_exp_laboral="", $arg_id_cargo_exp_laboral="", $arg_id_visita_exp_laboral="") 
        {
        $this->id_exp_laboral=$arg_id_exp_laboral; 
        $this->descripcion_exp_laboral=$arg_descripcion_exp_laboral;
        $this->id_cargo_exp_laboral=$arg_id_cargo_exp_laboral;
        $this->id_visita_exp_laboral=$arg_id_visita_exp_laboral; 

        }
        public function getId_exp_laboral()
    {
        return $this->id_exp_laboral;
    }
    public function setId_exp_laboral()
    {
        $this->id_exp_laboral= $id_exp_laboral;
    }
    public function getDescripcion_exp_laboral()
    {
        return $this->descripcion_exp_laboral;
    }
    public function setDescripcion_exp_laboral()
    {
        $this->descripcion_exp_laboral= $descripcion_exp_laboral;
    }
    public function getId_cargo_exp_laboral()
    {
        return $this->id_cargo_exp_laboral;
    }
    public function setId_cargo_exp_laboral()
    {
        $this->id_cargo_exp_laboral= $id_cargo_exp_laboral;
    }
    public function getId_visita_exp_laboral()
    {
        return $this->id_visita_exp_laboral;
    }
    public function setId_visita_exp_laboral()
    {
        $this->id_visita_exp_laboral= $id_visita_exp_laboral;
    }
}

?>