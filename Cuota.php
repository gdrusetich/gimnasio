<?php
class Cuota {
    public $nroCuota;
    public $valor;
    public $abonada;
    public $fechaDePago;
    public $nroSocio;

    public function __construct($unNroCuota,$unValor,$estaAbonada,$unaFechaDePago,$unNroSocio){
        $this->nroCuota = $unNroCuota;
        $this->valor = $unValor;
        $this->abonada = $estaAbonada;
        $this->fechaPago = $unaFechaDePago;
        $this->nroSocio = $unNroSocio;
        }
    }