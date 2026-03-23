<?php
class Circulo{
    public $raio;
    public function calcularArea(){
        $area = pi() * pow($this->raio, 2);
        echo "A área do círculo é: " . $area . "<br><br>";
    }
    public function calcularPerimetro(){
        $perimetro = 2 * pi() * $this->raio;
        echo "O perímetro do círculo é: " . $perimetro . "<br><br>";
    }
}
echo "<h1>Círculo 1</h1>";
$circulo1 = new Circulo();
$circulo1->raio = 5;
echo "O círculo tem o raio: " . $circulo1->raio . "<br><br>";
$circulo1->calcularArea();
$circulo1->calcularPerimetro();
echo "<h1>Círculo 2</h1>";
$circulo2 = new Circulo();
$circulo2->raio = 10;
echo "O círculo tem o raio: " . $circulo2->raio . "<br><br>";
$circulo2->calcularArea();
$circulo2->calcularPerimetro();