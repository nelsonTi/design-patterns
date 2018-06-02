<?php

/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 02/06/18
 * Time: 02:01
 */

    class Orcamento {

        private $valor;

        function __construct($novoValor){
        $this->valor = $novoValor;
        }

        public function getValor(){
            return $this->valor;
        }
    }