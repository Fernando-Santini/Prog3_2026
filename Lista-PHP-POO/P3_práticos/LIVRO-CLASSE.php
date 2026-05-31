<?php
class Livro {
    private $titulo;
    private $autor;
    private $paginas;

    public function __construct($titulo, $autor, $paginas) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
    }

    public function getTitulo() { return $this->titulo; }
    public function setTitulo($titulo) { $this->titulo = $titulo; }

    public function getAutor() { return $this->autor; }
    public function setAutor($autor) { $this->autor = $autor; }

    public function getPaginas() { return $this->paginas; }
    public function setPaginas($paginas) { $this->paginas = $paginas; }

    public function exibir() {
        echo "Livro: {$this->titulo} | Autor: {$this->autor} | Páginas: {$this->paginas}<br>";
    }
}

$livro1 = new Livro("Dom Casmurro", "Machado de Assis", 256);
$livro2 = new Livro("O Hobbit", "J.R.R. Tolkien", 310);

$livro1->exibir();
$livro2->exibir();
?>