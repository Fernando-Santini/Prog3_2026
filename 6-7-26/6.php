<?php
 
abstract class Veiculo {
    public function __construct(
        protected string $marca,
        protected int    $ano
    ) {}
 
    abstract public function tipo(): string;
 
    public function apresentar(): string {
        return $this->tipo() . ': ' . $this->marca . ' (' . $this->ano . ')';
    }
}
 
class Carro extends Veiculo {
    public function __construct(
        string $marca,
        int $ano,
        private int $portas
    ) {
        Veiculo::__construct($marca, $ano);
    }
 
    public function tipo(): string {
        return 'Carro';
    }
 
    public function apresentar(): string {
        return parent::apresentar() . " ({$this->portas} portas)<br>";
    }
}

class Moto extends Veiculo {
    public function __construct(
        string $marca,
        int $ano,
        public string $cilindrada,
    ) {
        Veiculo::__construct($marca, $ano);
    }

    public function tipo(): string {
        return 'Moto';
    }
 
    public function apresentar(): string {
        return parent::apresentar() . " ({$this->cilindrada} cc)<br>";
    }
}
 
$c = new Carro("Toyota", 2023, 4);
echo $c->apresentar();
$m = new Moto("Honda", 2022, "650");
echo $m->apresentar();
