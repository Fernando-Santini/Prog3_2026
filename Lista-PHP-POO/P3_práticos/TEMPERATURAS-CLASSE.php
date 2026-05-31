<?php
class Temperatura {
    private $celsius;

    public function __construct($celsius) {
        $this->celsius = $celsius;
    }

    public function getCelsius() { return $this->celsius; }
    public function setCelsius($celsius) { $this->celsius = $celsius; }

    public function paraFahrenheit() {
        return ($this->celsius * 9/5) + 32;
    }

    public function paraKelvin() {
        return $this->celsius + 273.15;
    }

    public function exibirTodas() {
        echo "C: {$this->celsius}°C | F: " . $this->paraFahrenheit() . "°F | K: " . $this->paraKelvin() . "K<br>";
    }
}

$t1 = new Temperatura(0);
$t2 = new Temperatura(100);
$t3 = new Temperatura(37);

$t1->exibirTodas();
$t2->exibirTodas();
$t3->exibirTodas();
?>