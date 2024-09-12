<?php
class Presupuesto {
    private $CostoCom;
    private $Distancia;
    private $Consumo;
    private $Precio;
    private $CostoAli;
    private $CostoPeaj;
    private $Presupuesto;

    public function __construct($distancia, $consumo, $precio, $costoAli, $costoPeaj) {
        $this->Distancia = $distancia;
        $this->Consumo = $consumo;
        $this->Precio = $precio;
        $this->CostoAli = $costoAli;
        $this->CostoPeaj = $costoPeaj;
        $this->Presupuesto = 0; 
        $this->CostoCom = 0; 
    }

    public function calcularCostoCom(){
        $this->CostoCom = ($this->Distancia / $this->Consumo) * $this->Precio;
    }

    public function getCostoCom(){
        return $this->CostoCom;
    }

    public function calcularPresu(){
        $this->calcularCostoCom(); 
        $this->Presupuesto = $this->CostoCom + $this->CostoAli + $this->CostoPeaj;
    }

    public function getPresupuesto(){
        return $this->Presupuesto;
    }
}