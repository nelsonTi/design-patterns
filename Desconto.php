<?php

/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 02/06/18
 * Time: 14:03
 */
interface Desconto
{

    public function desconto(Orcamento $orcamento);

    public function setProximo(Desconto $proximo);


}