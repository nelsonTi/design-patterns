<?php

/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 02/06/18
 * Time: 02:02
 */
class CalculadoraDeImpostos
{

    public function calcula(Orcamento $Orcamento, Imposto $imposto)
    {

        return $imposto->calcula($Orcamento);

    }

}