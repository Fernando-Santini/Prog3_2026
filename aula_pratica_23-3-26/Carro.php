<?php
class carro{
    public $marca;
    public $modelo;
    public $ano;
    public $cor;

    public $velocidadeMaxima;

    public function ligar(){
        echo "O carro está ligado<br><br>";
    }
    public function acelerar(){
        echo "O carro está acelerando<br><br>";
    }
    public function frear(){
        echo "O carro está freando<br><br>";
    }
}
echo "<h1>Carro 1</h1>";
$carro1 = new carro();
$carro1->marca = "Chevrolet";
$carro1->modelo = "Opala";
$carro1->ano = 1979;
$carro1->cor = "Preto";
$carro1->velocidadeMaxima = "todos o km/h com coragem o suficiente<br><br>";

echo "O carro tem a marca: " . $carro1->marca . "<br>";
echo "O carro tem o modelo: " . $carro1->modelo . "<br>";
echo "O carro tem o ano: " . $carro1->ano . "<br>";
echo "O carro tem a cor: " . $carro1->cor . "<br>";
echo "O carro tem a velocidade máxima: " . $carro1->velocidadeMaxima . " km/h<br><br>";
$carro1->ligar();
$carro1->acelerar();
$carro1->frear();