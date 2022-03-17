<?php

class Produto
{ 
    public $descricao;
    public $estoque;
    public $preco;

    public function aumentarEstoque($valor)
    {
        $this->estoque += $valor;
    }

    public function diminuirEstoque($valor)
    {
        $this->estoque -= $valor;
    }
    
    public function reajustarPreco($percentual)
    {
        $this->preco += ($percentual*$this->preco) / 100;
    }
}

$celular = new Produto;
$celular->descricao = "Celular";
$celular->estoque = 850;
$celular->preco = 1580;

echo "O $celular->descricao tem quantidade em estoque $celular->estoque com o preço unitário de R$$celular->preco";

echo "<br>";

$celular->aumentarEstoque(10);
$celular->diminuirEstoque(5);
$celular->reajustarPreco(50);

echo "O $celular->descricao tem quantidade em estoque $celular->estoque com o preço unitário de R$$celular->preco";