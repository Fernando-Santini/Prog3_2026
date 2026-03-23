<?php
class produto{
    public $nome;
    public $preco;
    public $estoque;
    public $descrição;

    public function comprar(){
        echo "O produto" . $this->nome."está sendo comprado";
    }
    public function vender(){
        echo "O produto" . $this->nome."está sendo vendido";
    }
    public function mostrarDetalhes(){
        echo "O produto tem o nome: " . $this->nome . "<br>";
        echo "O produto tem o preço: " . $this->preco . "<br>";
        echo "O produto tem o estoque: " . $this->estoque . "<br>";
        echo "O produto tem a descrição: " . $this->descrição . "<br>";
    }
    public function adicionarEstoque($quantidade){
        $this->estoque += $quantidade;
        echo "O estoque do produto " . $this->nome . " foi adicionado. Novo estoque: " . $this->estoque . "<br>";
    }
    public function removerEstoque($quantidade){
        if ($quantidade <= $this->estoque) {
            $this->estoque -= $quantidade;
            echo "O estoque do produto " . $this->nome . " foi removido. Novo estoque: " . $this->estoque . "<br>";
        } else {
            echo "Não é possível remover " . $quantidade . " unidades do produto " . $this->nome . ". Estoque insuficiente.<br>";
        }
    }

}
echo "<h1>Produto 1</h1>";
$produto1 = new produto();
$produto1->nome = "Smartphone Samsung Galaxy S26 Ultra";
$produto1->preco = 12000.00;
$produto1->estoque = 50;
$produto1->descrição = "O Samsung Galaxy S26 Ultra é um smartphone topo de linha com uma tela AMOLED de 6,8 polegadas, processador Exynos 2200, 12GB de RAM e uma câmera traseira quádrupla de 108MP. Ele oferece desempenho excepcional, recursos avançados de fotografia e uma bateria de longa duração para atender às necessidades dos usuários mais exigentes.";
$produto1->mostrarDetalhes();
$produto1->adicionarEstoque(20);
$produto1->removerEstoque(10);
echo "<h1>Produto 2</h1>";
$produto2 = new produto();
$produto2->nome = "Notebook Dell XPS 15";
$produto2->preco = 15000.00;
$produto2->estoque = 30;
$produto2->descrição = "O Dell XPS 15 é um notebook premium com uma tela InfinityEdge de 15,6 polegadas, processador Intel Core i7 de 11ª geração, 16GB de RAM e um SSD de 512GB. Ele oferece desempenho poderoso, design elegante e uma experiência visual imersiva, tornando-o ideal para profissionais criativos e entusiastas de tecnologia.";
$produto2->mostrarDetalhes();
$produto2->adicionarEstoque(15);
$produto2->removerEstoque(5);