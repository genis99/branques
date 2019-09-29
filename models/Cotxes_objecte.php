<?php
class Cotxe {
    public $marca;
    public $preu;
    public $cavalls;

    function Cotxe($marca, $preu, $cavalls) {
        $this->marca = $marca;
        $this->preu = $preu;
        $this->cavalls = $cavalls;
    }

    function getBrand() {
        return $marca;
    }

    function getPrice() {
        return $preu;
    }

    function getHorsepower() {
        return $cavalls;
    }

}
?>