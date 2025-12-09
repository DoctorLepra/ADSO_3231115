<?php 

class cuentaBancaria{

    private $identificacion;
    private $nombre;
    private $nrocuenta;
    private $tipocuenta;
    private $saldo;

    public function __construct ($identificacion, $nombre, $nrocuenta, $tipocuenta, $saldo)
    {

        $this->identificacion = $identificacion;
        $this->nombre = $nombre;
        $this->nrocuenta = $nrocuenta;
        $this->tipocuenta = $tipocuenta;
        $this->saldo = $saldo;

    }

    //Zona Getters

    public function getIdentificacion(){
        return $this->identificacion;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getNroCuenta(){
        return $this->nrocuenta;
    }

    public function getTipoCuenta(){
        return $this->tipocuenta;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    //Zona Setters

    public function setIdentificacion($identificacion){
        $this->identificacion = $identificacion;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setNroCuenta($nrocuenta){
        $this->nrocuenta = $nrocuenta;
    }

    public function setTipoCuenta($tipocuenta){
        $this->tipocuenta = $tipocuenta;
    }

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    // Funciones Adicionales

    public function descripcion(){
        echo "<br>"."La cuenta pertenece a ".$this->nombre." con número de cuenta ".$this->nrocuenta." de tipo ".$this->tipocuenta." y un saldo de $".$this->saldo;
    }

    public function ingreso($monto){
        $this->saldo += $monto;
    }

    public function retiro($monto){
        if($monto > $this->saldo){
            echo "<br>"."Fondos insuficientes para realizar el retiro";
        } else {
            $this->saldo -= $monto;
        }
    }

}
