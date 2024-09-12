<?php
class Presupuesto{
    private $CostoCom
    private $Distancia
    private $Consumo
    private $Precio
    private $CostoAli
    private $CostoPeaj
    private $Presupuesto

    public function __construct($costoCom, $distancia, $consumo, $precio, $costoAli, $costoPeaj, $presupuesto) {
        $this->CostoCom = 0;
        $this->Distancia = 0;
        $this->Consumo = 0;
        $this->Precio = 0;
        $this->CostoAli = 0;
        $this->CostoPeaj = 0;
        $this->Presupuesto = 0;
    }

    public function calcularCostoCom(){
        $this->CostoCom = (this->Distancia / this->Consumo)*this->Precio;
    }

    public function getCostoCom(){
        return $this->CostoCom;
    }

    public function calcularPresu(){
        $this->Presupuesto = $this->CostoCom + $this->CostoAli + $this->CostoPeaj
    }
    
    public function getPresupuesto(){
        return $this->Presupuesto;
    }
}