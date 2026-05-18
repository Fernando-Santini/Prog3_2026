<?php
class Produto
{
    private $nome;
    private $preco;
    private $estoque;

    public function setNome($n)
    {
        $n = trim($n);
        if (empty($n)) {
            echo "O nome do produto não pode ser vazio.<br>";
            return false;
        } else {
            $this->nome = $n;
            return true;
        }
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setPreco($p)
    {
        if (!is_numeric($p) || $p <= 0) {
            echo "O preço deve ser um número maior que 0. A entrada foi.".$p.".<br>";
            return false;
        } else {
            $this->preco = $p;
            return true;
        }
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setEstoque($q)
    {
        if (!is_numeric($q) || $q < 0) {
            echo "A quantidade em estoque deve ser um número não negativo. A entrada foi.".$q.".<br>";
            return false;
        } else {
            $this->estoque = $q;
            return true;
        }
    }

    public function getEstoque()
    {
        return $this->estoque;
    }

    public function mostrarProduto()
    {
        if ($this->nome && $this->preco !== null && $this->estoque !== null) {
            echo "<h2>Informações do Produto</h2>";
            echo "Nome: " . $this->nome . "<br>";
            echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
            echo "Quantidade em estoque: " . $this->estoque . "<br>";
        } else {
            echo "Produto não cadastrado completamente.<br>";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto = new Produto();
    $valid = true;
    $valid &= $produto->setNome($_POST['nome']);
    $valid &= $produto->setPreco($_POST['preco']);
    $valid &= $produto->setEstoque($_POST['estoque']);
    if ($valid) {
        $produto->mostrarProduto();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto</title>
</head>

<body>
    <h1>Cadastrar Produto</h1>
    <form method="post" action="">
        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" required><br><br>

        <label for="estoque">Quantidade em Estoque:</label>
        <input type="number" id="estoque" name="estoque" min="0" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>