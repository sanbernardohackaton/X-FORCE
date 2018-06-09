<?php
class acceso 
{
    private $id_acceso;
    private $hora_acceso;
    private $id_visitante_acceso

    public function __construct($arg_id_acceso="", $arg_hora_acceso="", $id_visitante_acceso="") 
    {
        $this->id_acceso=$arg_id_acceso; 
        $this->hora_acceso=$arg_hora_acceso;
        $this->id_visitante_acceso=$arg_id_visitante_acceso;
    }

    public function getId_acceso()
    {
        return $this->id_acceso;
    }

    public function setId_acceso()
    {
        $this->id_acceso = $id_acceso;
    }

    public function getHora_acceso()
    {
        return $this->hora_acceso;
    }

    public function setHora_acceso()
    {
        $this->hora_acceso = $hora_acceso;
    }

    public function getId_visitante_acceso()
    {
        return $this->id_visitante_acceso;
    }

    public function setId_visitante_acceso()
    {
        $this->id_visitante_acceso = $id_visitante_acceso;
    }
}

?>
?>