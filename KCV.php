<?php

/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 02/06/18
 * Time: 02:30
 */
class KCV extends Imposto
{

    function __construct($imposto = null)
    {
        parent::__construct($imposto);
    }

    function calcula(Orcamento $Orcamento)
    {

        return $Orcamento->getValor() * 0.2 + $this->calculaOutroImposto($Orcamento);
    }
}