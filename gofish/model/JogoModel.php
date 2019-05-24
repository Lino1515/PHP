<?php

class JogoModel {

    function shuffle($baralho) {
        $obtemTamanhoArray = sizeof($baralho);

        for ($i = 0; $i < $obtemTamanhoArray; $i++) {

            $rand_keys = array_rand($baralho, 1);
            $obtemShuffle[] = $baralho[$rand_keys];

            foreach ($baralho as $index => $value) {
                if ($index == $rand_keys) {
                    unset($baralho[$index]);
                }
            }
        }

        return $obtemShuffle;
    }

    //Fornece 4 cartas a cada jogador
    function distribui($baralho) {
        for ($i = 0; $i < 4; $i++) {

            $rand_keys = array_rand($baralho, 2);
            $minhaMao[] = $baralho[$rand_keys[0]];
            $maoBot[] = $baralho[$rand_keys[1]];

            foreach ($baralho as $index => $carta) {
                if ($minhaMao[$i] == $carta) {
                    $getIndex = $index;
                    //remove o valor acima descrito 
                    unset($baralho[$getIndex]);
                }
            }
            foreach ($baralho as $index => $carta) {
                if ($maoBot[$i] == $carta) {
                    $getIndex = $index;
                    //remove o valor acima descrito 
                    unset($baralho[$getIndex]);
                }
            }
        }
        $returnTotal = array($minhaMao, $maoBot, $baralho);
        return $returnTotal;
    }

    function game($minhaMao, $maoBot, $baralho, $cartaPedida) {
        echo 'Hello';
    }

}
