<?php
class Musculo{
    public $nroMusculo;
    public $nombreMusculo;
    public $zonaCorporal;

    public function __construct($unNroMusculo,$unNombreMusculo,$unaZonaCorporal){
        $this->nroMusculo = $unNroMusculo;
        $this->nombreMusculo = $unNombreMusculo;
        $this->zonaCorporal = $unaZonaCorporal;
    }
}

$biceps = new Musculo (1,"Biceps",$trenSuperior);
$triceps = new Musculo (2,"Triceps",$trenSuperior);
$deltoides = new Musculo (3,"Deltoides",$trenSuperior);
$pectoral = new Musculo (4,"Pectoral ",$pecho);
$dorsal = new Musculo (5,"Dorsal Ancho",$espalda);
$romboide = new Musculo (6,"Romboides",$espalda);
$cuadriceps= new Musculo (7,"Cuádriceps",$trenInferior);
$femoral=new Musculo (8,"Femoral",$trenInferior);
$gemelo=new Musculo (9,"Gemelos",$trenInferior);
$aductor = new Musculo (10,"Aductores",$trenInferior);
$gluteos=new Musculo (11,"Cuádriceps",$trenInferior);
$abdominal=new Musculo (12,"Abdominales",$torso);
$espinales=new Musculo (13,"Espinales",$torso);