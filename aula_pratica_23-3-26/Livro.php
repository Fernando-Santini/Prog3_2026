<?php
class Livro
{
    public $titulo;
    public $autor;
    public $numeroPaginas;
    public $anoPublicacao;
    public function ler()
    {
        echo "O livro está sendo lido"."<br>";
    }
    public function abrir()
    {
        echo "O livro está sendo aberto"."<br>";
    }
    public function fechar()
    {
        echo "O livro está sendo fechado"."<br>";
    }
}
echo "<h1>Livro 1</h1>";
$livro1 = new Livro();
$livro1->titulo = "O Senhor dos Anéis";
$livro1->autor = "J.R.R. Tolkien";
$livro1->numeroPaginas = 1178;
$livro1->anoPublicacao = 1954;

echo "O livro tem o título: " . $livro1->titulo . "<br>";
echo "O livro tem o autor: " . $livro1->autor . "<br>";
echo "O livro tem o número de páginas: " . $livro1->numeroPaginas . "<br>";
echo "O livro tem o ano de publicação: " . $livro1->anoPublicacao . "<br>";

$livro1->abrir();
$livro1->ler();
$livro1->fechar();