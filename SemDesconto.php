<?php

/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 02/06/18
 * Time: 15:43
 */
class SemDesconto implements Desconto
{

    public function desconto(Orcamento $orcamento)
    {
        return 0;
    }

    public function setProximo(Desconto $proximo)
    {
        // TODO: Implement setProximo() method.
    }


}