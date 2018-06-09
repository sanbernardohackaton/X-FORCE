<?php
class oferta_laboral
{

      private $id_oferta_laboral;
      private $descripcion_oferta_laboral;
      private $sueldo_oferta_laboral;
      private $direccion_oferta_laboral;
      private $jornada_oferta_laboral;
      private $cupos_oferta_laboral;
      private $experiencia_oferta_laboral;
      private $estado_inclusivo_oferta_laboral;
      private $id_cargo_oferta_laboral;
      private $id_tipo_oferta_laboral;
      private $correo_empresa;
      private $id_comuna;

      public function __construct($arg_id_oferta_laboral="", $arg_descripcion_oferta_laboral="", $arg_sueldo_oferta_laboral="", 
                                  $arg_direccion_oferta_laboral="", $arg_jornada_oferta_laboral="" $arg_cupos_oferta_laboral="",
                                  $arg_experiencia_oferta_laboral="", $arg_estado_inclusivo_oferta_laboral="", 
                                  $arg_id_cargo_oferta_laboral="", $arg_id_tipo_oferta_laboral="", $arg_correo_empresa="",
                                  $arg_id_comuna="") 
    {
        $this->id_oferta_laboral=$arg_id_oferta_laboral; 
        $this->descripcion_oferta_laboral=$arg_descripcion_oferta_laboral;
        $this->sueldo_oferta_laboral=$arg_sueldo_oferta_laboral;
        $this->direccion_oferta_laboral=$arg_direccion_oferta_laboral; 
        $this->jornada_oferta_labora=$arg_jornada_oferta_labora;
        $this->cupos_oferta_laboral=$arg_cupos_oferta_laboral;
        $this->experiencia_oferta_laboral=$arg_experiencia_oferta_laboral; 
        $this->estado_inclusivo_oferta_laboral=$arg_estado_inclusivo_oferta_laboral;
        $this->id_cargo_oferta_laboral=$arg_id_cargo_oferta_laboral;
        $this->id_tipo_oferta_laboral=$arg_id_tipo_oferta_laboral; 
        $this->correo_empresa=$arg_correo_empresa;
        $this->id_comuna=$arg_id_comuna;
    }

    public function getId_oferta_laboral()
    {
        return $this->id_oferta_laboral;
    }
    public function setId_oferta_laboral()
    {
        $this->id_oferta_laboral= $id_oferta_laboral;
    }
 
    public function getDescripcion_oferta_laboral()
    {
        return $this->descripcion_oferta_laboral;
    }
    public function setDescripcion_oferta_laboral()
    {
        $this->descripcion_oferta_laboral= $descripcion_oferta_laboral;
    }

    public function getSueldo_oferta_laboral()
    {
        return $this->sueldo_oferta_laboral;
    }
    public function setSueldo_oferta_laboral()
    {
        $this->sueldo_oferta_laboral= $sueldo_oferta_laboral;
    }

    public function getDireccion_oferta_laboral()
    {
        return $this->direccion_oferta_laboral;
    }
    public function setDireccion_oferta_laboral()
    {
        $this->direccion_oferta_laboral= $direccion_oferta_laboral;
    }

    public function getJornada_oferta_laboral()
    {
        return $this->jornada_oferta_laboral;
    }
    public function setJornada_oferta_laboral()
    {
        $this->jornada_oferta_laboral= $jornada_oferta_laboral;
    }

    public function getCupos_oferta_laboral()
    {
        return $this->cupos_oferta_laboral;
    }
    public function setCupos_oferta_laboral()
    {
        $this->cupos_oferta_laboral= $cupos_oferta_laboral;
    }

    public function getExperiencia_oferta_laboral()
    {
        return $this->experiencia_oferta_laboral;
    }
    public function setExperiencia_oferta_laboral()
    {
        $this->experiencia_oferta_laboral= $experiencia_oferta_laboral;
    }

    public function getEstado_inclusivo_oferta_laboral()
    {
        return $this->estado_inclusivo_oferta_laboral;
    }
    public function setEstado_inclusivo_oferta_laboral()
    {
        $this->estado_inclusivo_oferta_laboral= $estado_inclusivo_oferta_laboral;
    }

    public function getId_cargo_oferta_laboral()
    {
        return $this->id_cargo_oferta_laboral;
    }
    public function setId_cargo_oferta_laboral()
    {
        $this->id_cargo_oferta_laboral= $id_cargo_oferta_laboral;
    }
    
    public function getId_tipo_oferta_laboral()
    {
        return $this->id_tipo_oferta_laboral;
    }
    public function setId_tipo_oferta_laboral()
    {
        $this->id_tipo_oferta_laboral= $id_tipo_oferta_laboral;
    }

    public function getCorreo_empresa()
    {
        return $this->correo_empresa;
    }
    public function setCorreo_empresa()
    {
        $this->correo_empresa= $correo_empresa;
    }

    public function getId_comuna()
    {
        return $this->id_comuna;
    }
    public function setId_comuna()
    {
        $this->id_comuna= $id_comuna;
    }



}

?>