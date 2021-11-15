<?php
class ZonaCorporal {
    public $nroZona;
    public $zona;

    public function __construct($unNroZona,$unaZona){
        $this->nroZona = $unNroZona;
        $this->zona = $unaZona;
        }
    }

$pecho = new ZonaCorporal (1,"Pecho");
$espalda = new ZonaCorporal (2,"Espalda");
$trenInferior = new ZonaCorporal (3,"Tren Inferior");
$trenSuperior = new ZonaCorporal (4,"Tren Superior");
$torso = new ZonaCorporal (5,"Torso");
