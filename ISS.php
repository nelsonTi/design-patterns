<?php

/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 02/06/18
 * Time: 02:10
 */

    class ISS implements Imposto {
        public function calcula(Orcamento $Orcamento){
            return $Orcamento->getValor() * 0.1;
        }

    }