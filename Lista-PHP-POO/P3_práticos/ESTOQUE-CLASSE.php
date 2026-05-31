<?php
class Estoque {
    private $produtos = [];

    public function adicionarProduto($nome, $quantidade) {
        if ($quantidade > 0) {
            $this->produtos[$nome] = $quantidade;
        }
    }

    public function listarProdutos() {
        echo "--- Lista de Estoque ---<br>";
        foreach ($this->produtos as $nome => $qtd) {
            echo "Produto: {$nome} | Qtd: {$qtd}<br>";
        }
    }

    public function totalItens() {
        return array_sum($this->produtos);
    }
}

$estoque = new Estoque();
$estoque->adicionarProduto("Notebook", 5);
$estoque->adicionarProduto("Mouse", 20);
$estoque->adicionarProduto("Teclado", 12);

$estoque->listarProdutos();
echo "Total Geral de Itens: " . $estoque->totalItens() . "<br>";
?>