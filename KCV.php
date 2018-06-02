<?php

/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 02/06/18
 * Time: 02:30
 */
    class KCV  implements Imposto {

        public function calcula(Orcamento $Orcamento){

            return $Orcamento->getValor() * 0.2;
        }
    }