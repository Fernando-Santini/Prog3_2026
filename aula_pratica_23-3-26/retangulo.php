<?php
class retangulo{
    public $comprimento;
    public $largura;
    public function calcularArea(){
        $area = $this->comprimento * $this->largura;
        echo "A área do retângulo é: " . $area . "<br><br>";
    }
    public function calcularPerimetro(){
        $perimetro = 2 * ($this->comprimento + $this->largura);
        echo "O perímetro do retângulo é: " . $perimetro . "<br><br>";
    }
}
echo "<h1>Retângulo 1</h1>";
$retangulo1 = new retangulo();
$retangulo1->comprimento = 5;
$retangulo1->largura = 3;
echo "O retângulo tem o comprimento: " . $retangulo1->comprimento . "<br>";
echo "O retângulo tem a largura: " . $retangulo1->largura . "<br><br>";
$retangulo1->calcularArea();
$retangulo1->calcularPerimetro();
echo "<h1>Retângulo 2</h1>";
$retangulo2 = new retangulo();
$retangulo2->comprimento = 10;
$retangulo2->largura = 4;
echo "O retângulo tem o comprimento: " . $retangulo2->comprimento . "<br>";
echo "O retângulo tem a largura: " . $retangulo2->largura . "<br><br>";
$retangulo2->calcularArea();
$retangulo2->calcularPerimetro();
