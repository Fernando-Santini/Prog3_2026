<?php
class Retangulo {
    private $largura;
    private $altura;

    public function __construct($largura, $altura) {
        $this->setLargura($largura);
        $this->setAltura($altura);
    }

    public function getLargura() { return $this->largura; }
    public function setLargura($largura) {
        if ($largura > 0) $this->largura = $largura;
    }

    public function getAltura() { return $this->altura; }
    public function setAltura($altura) {
        if ($altura > 0) $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->largura * $this->altura;
    }

    public function calcularPerimetro() {
        return 2 * ($this->largura + $this->altura);
    }
}

$r1 = new Retangulo(5, 10);
$r2 = new Retangulo(6, 9);

if ($r1->calcularArea() > $r2->calcularArea()) {
    echo "O primeiro retângulo tem maior área (" . $r1->calcularArea() . ").<br>";
} else {
    echo "O segundo retângulo tem maior área (" . $r2->calcularArea() . ").<br>";
}
?>