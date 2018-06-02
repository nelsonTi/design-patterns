<?php

/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 02/06/18
 * Time: 02:10
 */
class ICMS extends TemplateDeImpostoCondiconal
{

    public  function deveUsarOMaximo(Orcamento $Orcamento){
        return $Orcamento->getValor() >500;
    }

    public  function taxacaoMinima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.05;
    }

    public  function taxacaoMaxima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.15;
    }

}