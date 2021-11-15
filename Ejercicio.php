<?php
class Ejercicio{
    public $nroEjercicio;
    public $nombreEjercicio;
    public $zonaCorporal;
    public $musculo;

    public function __construct($unNroEjercicio,$unNombreEjercicio,$unaZonaCorporal,$unMusculo){
        $this->nroEjercicio = $unNroEjercicio;
        $this->nombreEjercicio = $unNombreEjercicio;
        $this->zonaCorporal = $unaZonaCorporal;
        $this->musculo = $unMusculo;
    }
}
//Biceps
$curlConMancuerna = new Ejercicio (1,"Curl con Mancuerna",$trenSuperior,$biceps);
$bancoScott = new Ejercicio (2,"banco Scott",$trenSuperior,$biceps);
$concentrado = new Ejercicio (3,"Concentrado",$trenSuperior,$biceps);
$bicepsConBarra = new Ejercicio (4,"Biceps c/Barra",$trenSuperior,$biceps);

//Triceps
$tricepsConMancuerna = new Ejercicio (5,"Press de triceps c/Mancuerna",$trenSuperior,$triceps);
$tricepsConBarra = new Ejercicio (6,"Press de triceps c/Barra",$trenSuperior,$triceps);
$tricepsConPolea = new Ejercicio (7,"Press de triceps c/Polea",$trenSuperior,$triceps);

//Deltoides
$vueloLateral = new Ejercicio (8,"Vuelos Laterales",$trenSuperior,$deltoides);
$vueloFrontal = new Ejercicio (9,"Vuelos Frontales",$trenSuperior,$deltoides);
$vueloPosterior = new Ejercicio (10,"Vuelos Posteriores",$trenSuperior,$deltoides);
$hombrosConMaquina = new Ejercicio (11,"Hombros Con Máquina",$trenSuperior,$deltoides);

//Pectoral

$bancoInclinado = new Musculo (8,"Banco inclinado c/Barra",$pecho,$pectoral);
$bancoPlano = new Musculo (9,"Banco plano c/Barra",$pecho,$pectoral);
$apertura = new Musculo (10,"Apertura",$pecho,$pectoral);
$bancoDeclinado = new Musculo (11,"Banco declinado c/barra",$pecho,$pectoral);

//Romboides

$dominadas= new Musculo (12,"Dominada con agarre prono.",$espalda,$dorsal);
$remoConBarra = new Musculo (13,"Remo con barra con agarre supino.",$espalda,$romboide);


//Dorsal
$pullOver = new Musculo (14,"Extension de brazo , acostado en un banco plano.",$espalda,$dorsal);
$dorsalera = new Musculo (15,"Dorsalera",$espalda,$dorsal);

//Gluteos
$gluteoConPolea = new Musculo (16,"Glúteo con Polea",$trenInferior,$gluteos);
$gluteoConMaquina = new Musculo (17,"Glúteo con c/Máquina",$trenInferior,$gluteos);

//Aductor
$gluteoConPolea = new Musculo (18,"Aductor con Polea",$trenInferior,$gluteos);
$gluteoConMaquina = new Musculo (19,"Aductor con c/Máquina",$trenInferior,$gluteos);

//Gemelos
$gemeloConMaquina = new Musculo (20,"Gemelo con Maquina",$trenInferior,$gemelo);
$gemeloConBarra = new Musculo (21,"Gemelo con Barra",$trenInferior,$gemelo);

//Cuádriceps
$cuadricepsConMaquina = new Musculo (22,"Cuádriceps con Maquina",$trenInferior,$cuadriceps);
$sentadillas = new Musculo (23,"Sentadilla",$trenInferior,$cuadriceps);

//Femoral
$femoralConMaquina = new Musculo (24,"Femoral con Maquina",$trenInferior,$femoral);
$pesoMuerto = new Musculo (25,"pesoMuerto",$trenInferior,$femoral);

//Abdominales
$crunch=new Musculo (26,"Crunch convencional ",$torso,$abdominales);
$plancha=new Musculo (27,"Plancha isometrica por 50 segundos ",$torso,$abdominales);
$oblicuos=new Musculo (28,"Crunch oblicuo ,alternando pierna con codos ",$torso,$abdominales);

//Espinales
$espinalesAlternados=new Musculo (29,"Espinales alternados",$torso,$espinales);
$nado = new Musculo (30,"Nado",$torso,$espinales);