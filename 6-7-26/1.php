<?php
 
class Animal {
    protected string $nome;
    protected string $som;
 
    public function __construct(string $nome, string $som) {
        $this->nome = $nome;
        $this->som  = $som;
    }
 
    public function fazerSom(): string {
        return "{$this->nome} faz: {$this->som}";
    }
}
 
class Cachorro extends Animal {
    private string $raca;
 
    public function __construct(string $nome, string $raca) {
        parent::__construct($nome, 'Au au');
        $this->raca = $raca;
    }
 
    public function info(): string {
        return $this->fazerSom() . ' | Raça: ' . $this->raca;
    }
    public function getNome(): string {
        return $this->nome;
    }
}
 
$dog = new Cachorro('Rex', 'Labrador');
echo $dog->info();