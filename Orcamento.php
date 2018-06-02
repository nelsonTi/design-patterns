<?php

/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 02/06/18
 * Time: 02:01
 */
class Orcamento
{

    private $valor;
    private $itens;


    function __construct($novoValor)
    {
        $this->valor = $novoValor;
        $this->itens = array();

    }

    public function addItem(Item $novoItem)
    {
        $this->itens[] = $novoItem;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getItens()
    {
        return $this->itens;
    }


}