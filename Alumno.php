<?php

//private, no podemos acceder desde afuera.
//protected por ahora no lo vemos. Puede generar otras clases, para heredar clases.
//public, podemos acceder desde afuera.
class Alumno {
    public $nroSocio;
    public $nombre;
    public $apellido;
    public $edad;
    private $pesoInicial;
    //private $cuota;
    //private $pesoActual;
    //private $altura;
    //private $telefono;
    //private $calle;
    //private $direccion;

    public function __construct($unNroSocio,$unNombre,$unApellido,$unaEdad,$unPesoInicial/*,$unPesoActual,$unaAltura,$unTelefono,$unaCalle,$unaDireccion,$unaCuota*/){
    $this->nroSocio=$unNroSocio;
    $this->nombre = $unNombre;
    $this->apellido=$unApellido;
    $this->edad = $unaEdad;
    $this->pesoInicial=$unPesoInicial;
    //$this->pesoActual = $unPesoActual;
    //$this->altura=$unaAltura;
    //$this->telefono = $unTelefono;
    //$this->calle = $unaCalle;
    //$this->direccion = $unaDireccion;
    //$this->cuota = []
    }
}
$diegoMaradona = new Alumno (10,"Diego","Maradona",61,100);
$pajaroCaniggia = new Alumno (7,"Claudio Paul","Caniggia",55,80);
$paulaGomez= new Alumno (1,"Paula","Gomez",25,60);
$florenciaRinaldo=new Alumno (2,"Florencia","Rinaldo",28,54);
/*
    public function setNombre($unNombre){
        $this->nombre=$unNombre;
    }

    public function setApellido($unApellido){
        $this->apellido=$unApellido;
    }

    public function setEdad($unaEdad){
        $this->edad=$unaEdad;
    }

    public function getNombre(){
        return $this->nombre;
    }
    
    public function getApellido(){
        return $this->apellido;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function getPersona(){
        return $this->nombre."<br>".
        $this->apellido."<br>".
        $this->edad;
    }
*/

?>