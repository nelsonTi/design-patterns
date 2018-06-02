<?php

/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 02/06/18
 * Time: 03:33
 */
class ICCC implements Imposto
{

    public function calcula(Orcamento $Orcamento)
    {

        $valor = $Orcamento->getValor();

        if ($valor < 1000) {
            return $valor * 0.05;

        } else if ($valor >= 1000 && $valor < 3000) {
            return $valor * 0.07;

        } else {
            return ($valor * 0.08) + 30;
        }

    }

}