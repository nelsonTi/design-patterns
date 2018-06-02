<?php

/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 02/06/18
 * Time: 12:37
 */
    class Item{

        private $nome;
        private $valor;

        public function __construct($novoNome, $novoValor){
            $this->nome = $novoNome;
            $this->valor = $novoValor;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getValor(){
            return $this->valor;
        }

    }