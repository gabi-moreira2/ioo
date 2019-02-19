<?php

    include ("cadeira.php");

    $c1 = new Cadeira();    //Adiciona um novo objeto (do tipo Cadeira) no sistema (instanciei(?))
    
    $c1->cor = "Azul";
    $c1->peso = "5.3";
    $c1->material = "Ferro";
    $c1->durabilidade = "10";
    $c1->custo = "120";
    $c1->tamanho = "0.4";
    $c1->encosto = true;
    $c1->regulagem_minima = "0.4";
    $c1->regulagem_maxima = "0.85";

    print_r($c1);           //Distrincha a variável $c1

    //Aumentando o tamanho!
    $c1->aumentar(0.5);
    echo '<br/><br/>';
    print_r($c1); 
    echo '<br/><br/>';

    //Outra Cadeira
    $c2 = new Cadeira();    //Adiciona um novo objeto (do tipo Cadeira) no sistema (instanciei(?))
    
    $c2->cor = "Preto";
    $c2->peso = "0.9";
    $c2->material = "Plástico";
    $c2->durabilidade = "5";
    $c2->custo = "40";
    $c2->tamanho = "0.4";
    $c2->encosto = false;
    $c2->regulagem_minima = "0.4";
    $c2->regulagem_maxima = "0.4";

    print_r($c2);           //Distrincha a variável $c1
?>