<?php

/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 02/06/18
 * Time: 16:47
 */
abstract class TemplateDeImpostoCondiconal implements Imposto
{
    public function calcula(Orcamento $Orcamento)
    {
        if($this->deveUsarOMaximo($Orcamento)){
            return $this->taxacaoMaxima($Orcamento);
        }else{
            return $this->taxacaoMinima($Orcamento);
        }

    }

    public abstract function deveUsarOMaximo(Orcamento $Orcamento);
    public abstract function taxacaoMinima(Orcamento $Orcamento);
    public abstract function taxacaoMaxima(Orcamento $Orcamento);



}