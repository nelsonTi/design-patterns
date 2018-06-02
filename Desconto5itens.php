<?php

/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 02/06/18
 * Time: 13:57
 */
class Desconto5itens implements Desconto
{

    private $proximoDesconto;

    public function desconto(Orcamento $Orcamento)
    {

        if (count($Orcamento->getItens()) >= 5) {

            return $Orcamento->getValor() * 0.01;

        } else {

            return $this->proximoDesconto->desconto($Orcamento);

        }

    }

    public function setProximo(Desconto $proximo)
    {
        $this->proximoDesconto = $proximo;
    }

}