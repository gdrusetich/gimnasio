<?php
class Profesor{
    public $nroEmpleado;
    public $nombre;
    public $apellido;
    public $edad;
    public $sexo;
    public $alumnos;

    public function __construct($unNroEmpleado,$unNombre,$unApellido,$unaEdad,$unSexo,$unosAlumnos){
        $this->nroEmpleado = $unNroEmpleado;
        $this->nombre = $unNombre;
        $this->apellido = $unApellido;
        $this->edad = $unaEdad;
        $this->sexo = $unSexo;
        $this->alumnos = [];
    }
}

$veronicaGallo = new Profesor (2,"Verónica","Gallo",35,"Femenino",[$paulaGomez,$florenciaRinaldo]);
$germanDrusetich = new Profesor  (1,"Germán","Drusetich",31,"Masculino",[$diegoMaradona,$pajaroCaniggia]);

/*
    public function getDireccion(){
    return $this->direccion;
    }

 * Set the value direction
 * 
 *   @return self
 
    public function setDireccion($unaDireccion){
    $this->dirección = $unaDireccion;
    return $this;
    }

    public function agregarHabitante($unaPersona){
        array_push($this->habitantes, $unaPersona);

    }

    public function cantidadDeHabitantes(){
        return count($this->habitantes);
    }

    public function borrarHabitante($unaPersona){
        array_pop($this->habitantes,$unaPersona);
    }
*/      
