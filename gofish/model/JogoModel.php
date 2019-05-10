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
    function distribui() {
        for ($i = 0; $i < 4; $i++) {

            $rand_keys = array_rand($baralho, 2);
            $MinhaMao[] = $baralho[$rand_keys[0]];
            $MaoBot[] = $baralho[$rand_keys[1]];

            var_dump(sizeof($baralho));

            foreach ($baralho as $index => $teste) {
                if ($MinhaMao == $teste) {
                    $getIndex = $index;
                    //remove o valor acima descrito 
                    unset($baralho[$getIndex]);
                }
            }
            foreach ($baralho as $index => $baralhos) {
                if ($MaoBot == $baralhos) {
                    $getIndex = $index;
                    //remove o valor acima descrito 
                    unset($baralho[$getIndex]);
                }
            }
        }
    }

}
