<?php
class visitante
{

    private $run_visitante;
    private $dv_visitante;
    private $nombres_visitante;
    private $id_genero_visitante;
    private $id_estado_civil_visitante;
    private $appaterno_visitante;
    private $apmaterno_visitante;
    private $fecha_nacimiento_visitante;
    private $correo_visitante;
    private $fono_contacto_visitante;
    private $direccion_visitante;
    private $id_region_visitante
    private $id_provincia_visitante;
    private $id_comuna_visitante;

    public function __construct($arg_run_visitante="", $arg_dv_visitante="", $arg_nombres_visitante="", 
                                $arg_id_genero_visitante="", $arg_id_estado_civil_visitante="" $arg_appaterno_visitante="",
                                $arg_apmaterno_visitante="", $arg_fecha_nacimiento_visitante="", $arg_correo_visitante="",
                                $arg_fono_contacto_visitante="", $arg_direccion_visitante="",$arg_id_region_visitante="",
                                $arg_id_provincia_visitante="", $arg_id_comuna_visitante="") 
    {
    $this->run_visitante=$arg_run_visitante; 
    $this->dv_visitante=$arg_dv_visitante;
    $this->nombres_visitante=$arg_nombres_visitante;
    $this->id_genero_visitante=$arg_id_genero_visitante; 
    $this->id_estado_civil_visitante=$arg_id_estado_civil_visitante;
    $this->appaterno_visitante=$arg_appaterno_visitante;
    $this->apmaterno_visitante=$arg_apmaterno_visitante; 
    $this->fecha_nacimiento_visitante=$arg_fecha_nacimiento_visitante;
    $this->correo_visitante=$arg_correo_visitante;
    $this->fono_contacto_visitante=$arg_fono_contacto_visitante; 
    $this->direccion_visitante=$arg_direccion_visitante;
    $this->id_region_visitante=$arg_id_region_visitante;
    $this->id_provincia_visitante=$arg_id_provincia_visitante;
    $this->id_comuna_visitante=$arg_id_comuna_visitante;
    }
    public function getRun_visitante()
    {
        return $this->run_visitante;
    }
    public function setRun_visitante()
    {
        $this->run_visitante= $run_visitante;
    }
    public function getDv_visitante()
    {
        return $this->dv_visitante;
    }
    public function setDv_visitante()
    {
        $this->dv_visitante= $dv_visitante;
    }
    public function getNombres_visitante()
    {
        return $this->nombres_visitante;
    }
    public function setNombres_visitante()
    {
        $this->nombres_visitante= $nombres_visitante;
    }
    public function getId_genero_visitante()
    {
        return $this->id_region;
    }
    public function setId_genero_visitante()
    {
        $this->id_genero_visitante= $id_genero_visitante;
    }
    public function getId_estado_civil_visitante()
    {
        return $this->id_estado_civil_visitante;
    }
    public function setId_estado_civil_visitante()
    {
        $this->id_estado_civil_visitante= $id_estado_civil_visitante;
    }
    public function getAppaterno_visitante()
    {
        return $this->appaterno_visitante;
    }
    public function setAppaterno_visitante()
    {
        $this->appaterno_visitante= $appaterno_visitante;
    }
    public function getApmaterno_visitante()
    {
        return $this->apmaterno_visitante;
    }
    public function setApmaterno_visitante()
    {
        $this->apmaterno_visitante= $apmaterno_visitante;
    }
    public function getFecha_nacimiento_visitante()
    {
        return $this->fecha_nacimiento_visitante;
    }
    public function setFecha_nacimiento_visitante()
    {
        $this->fecha_nacimiento_visitante= $fecha_nacimiento_visitante;
    }
    public function getCorreo_visitante()
    {
        return $this->correo_visitante;
    }
    public function setCorreo_visitante()
    {
        $this->correo_visitante= $correo_visitante;
    }
    public function getFono_contacto_visitante()
    {
        return $this->fono_contacto_visitante;
    }
    public function setFono_contacto_visitante()
    {
        $this->fono_contacto_visitante= $fono_contacto_visitante;
    }
    public function getDireccion_visitante()
    {
        return $this->direccion_visitante;
    }
    public function setDireccion_visitante()
    {
        $this->direccion_visitante= $direccion_visitante;
    }
    public function getId_region_visitante()
    {
        return $this->id_region_visitante;
    }
    public function setId_region_visitante()
    {
        $this->id_region_visitante= $id_region_visitante;
    }
    public function getId_provincia_visitante()
    {
        return $this->id_provincia_visitante;
    }
    public function setId_provincia_visitante()
    {
        $this->id_provincia_visitante= $id_provincia_visitante;
    }
    public function getId_comuna_visitante()
    {
        return $this->id_comuna_visitante;
    }
    public function setId_comuna_visitante()
    {
        $this->id_comuna_visitante= $id_comuna_visitante;
    }







  

}

?>