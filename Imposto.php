<?php

/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 02/06/18
 * Time: 02:33
 */
abstract class Imposto
{
    protected $outroImposto;

    function __construct($imposto = null){
        $this->outroImposto = $imposto;

    }

   public abstract function calcula(Orcamento $Orcamento);


    public function calculaOutroImposto(Orcamento $Orcamento)
    {

        if(is_null($this->outroImposto)) return 0;

        return $this->outroImposto->calcula($Orcamento);
    }

}
