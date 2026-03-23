<?php
    class Triangulo{
        public $base;
        public $altura;
        public function calcularArea(){
            $area = ($this->base * $this->altura) / 2;
            echo "A área do triângulo é: " . $area . "<br><br>";
        }
        public function calcularPerimetro(){
            $perimetro = 2 * ($this->base + $this->altura);
            echo "O perímetro do triângulo é: " . $perimetro . "<br><br>";
        }
        public function calculartipo(){
            if ($this->base == $this->altura) {
                echo "O triângulo é equilátero<br><br>";
            } elseif ($this->base == $this->altura || $this->base == $this->altura) {
                echo "O triângulo é isósceles<br><br>";
            } else {
                echo "O triângulo é escaleno<br><br>";
            }
        }
    }
    echo "<h1>Triângulo 1</h1>";
    $triangulo1 = new Triangulo();
    $triangulo1->base = 5;
    $triangulo1->altura = 3;
    echo "O triângulo tem a base: " . $triangulo1->base . "<br>";
    echo "O triângulo tem a altura: " . $triangulo1->altura . "<br><br>";
    $triangulo1->calcularArea();
    $triangulo1->calcularPerimetro();
    $triangulo1->calculartipo();
    echo "<h1>Triângulo 2</h1>";
    $triangulo2 = new Triangulo();
    $triangulo2->base = 4;
    $triangulo2->altura = 4;
    echo "O triângulo tem a base: " . $triangulo2->base . "<br>";
    echo "O triângulo tem a altura: " . $triangulo2->altura . "<br><br>";
    $triangulo2->calcularArea();
    $triangulo2->calcularPerimetro();
    $triangulo2->calculartipo();
    echo "<h1>Triângulo 3</h1>";
    $triangulo3 = new Triangulo();
    $triangulo3->base = 6;
    $triangulo3->altura = 8;
    echo "O triângulo tem a base: " . $triangulo3->base . "<br>";
    echo "O triângulo tem a altura: " . $triangulo3->altura . "<br><br>";
    $triangulo3->calcularArea();
    $triangulo3->calcularPerimetro();
    $triangulo3->calculartipo();
