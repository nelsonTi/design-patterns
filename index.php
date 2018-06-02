<?php

/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 02/06/18
 * Time: 02:00
 */

    require "Orcamento.php";
    require "Item.php";
    require "Desconto.php";
    require "Desconto5itens.php";
    require "Desconto500Reais.php";
    require "CalculadoraDeImpostos.php";
    require "CalculadoraDeDescontos.php";
    require "Imposto.php";
    require "ICMS.php";
    require "ISS.php";
    require "KCV.php";
    require "ICCC.php";

    $reforma = new Orcamento(1200);

    $calculadora = new CalculadoraDeImpostos();

    echo $calculadora->calcula($reforma,new ICMS());

    echo "</br>";

    echo $calculadora->calcula($reforma,new ISS());

    echo "</br>";

    echo $calculadora->calcula($reforma,new KCV());

    echo "</br>";

    echo $calculadora->calcula($reforma,new ICCC());

    //Descontos

    echo "</br>";
    echo "Teste de descontos";

    $calculadoraDeDescontos = new CalculadoraDeDescontos();

    echo "</br>";
    echo "Desconto";
    echo "</br>";

    $reforma->addItem(new Item("Tijolo",250));
    $reforma->addItem(new Item("Cimento",250));

    echo $calculadoraDeDescontos->desconto($reforma);


?>