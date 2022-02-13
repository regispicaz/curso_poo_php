<?php

class Lutador
{
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    protected $peso;
    private $categoria;
    protected $vitorias;
    protected $derrotas;
    protected $empates;

    //Métodos
    public function apresentar()
    {
        echo "<p>---------------------------------</p>";
        echo "<p>Nome: {$this->getNome()}</p>";
        echo "<p>Origem: {$this->getNacionalidade()}</p>}";
        echo "<p>Idade: {$this->getIdade()}</p>";
        echo "<p>Altura: {$this->getAltura()}</p>";
        echo "<p>Peso: {$this->getPeso()}";
        echo "<p>Categoria: {$this->getCategoria()}";
        echo "<p>Vitorias: {$this->getVitoria()}";
        echo "<p>Derrota: {$this->getDerrota()}";
        echo "<p>Empates: {$this->getEmpate()}";
    }

    public function status()
    {
        echo "<p>O lutador {$this->getNome()} é um peso {$this->getCategoria()} com {$this->getVitoria()} vitorias, {$this->getDerrota()} derrotas e {$this->getEmpate()} empates";
    }
    public function ganharLuta()
    {
        $this->setVitoria($this->getVitoria() + 1);
    }
    public function perderLuta()
    {
        $this->setDerrota($this->getDerrota() + 1);
    }
    public function empatarLuta()
    {
        $this->setEmpate($this->getEmpate() + 1);

    }

    //Métodos Especiais
    public function __construct($no, $na, $id, $al, $ps, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($ps);
        $this->vitoria = $vi;
        $this->derrota = $de;
        $this->empate = $em;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getVitoria()
    {
        return $this->vitorias;
    }

    public function getDerrota()
    {
        return $this->derrotas;
    }

    public function getEmpate()
    {
        return $this->empates;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria()
    {
        if ($this->getPeso() < 50) {
            $this->categoria = "Invalido";
        } elseif ($this->getPeso() < 75) {
            $this->categoria = "Leve";
        } elseif ($this->getPeso() < 85) {
            $this->categoria = "Medio";
        } elseif ($this->getPeso() < 100) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Invalido";
        }
    }

    public function setVitoria($vi)
    {
        $this->setVitoria($this->getVitoria() + 1);
    }

    public function setDerrota($de)
    {
        $this->setDerrota($this->getDerrota() + 1);
    }

    public function setEmpate($em)
    {
        $this->setEmpate($this->getEmpate() + 1);
    }
}