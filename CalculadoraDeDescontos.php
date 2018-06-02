<?php

/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 02/06/18
 * Time: 12:43
 */

require_once "Desconto500Reais.php";
require_once  "Desconto5itens.php";
require_once  "SemDesconto.php";


class CalculadoraDeDescontos
{

    public function desconto(Orcamento $Orcamento)
    {

        $desconto5itens = new Desconto5itens();
        $desonto500Reais = new Desconto500Reais();
        $semDesconto  = new SemDesconto();

        $desconto5itens->setProximo($desonto500Reais);
        $desonto500Reais->setProximo($semDesconto);

        $valorDoDesconto = $desconto5itens->desconto($Orcamento);

        return $valorDoDesconto;

    }
}