<?php

use ArmoredCore\Controllers\BaseController;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\Session;
use ArmoredCore\WebObjects\View;

class JogoController extends BaseController {

    public function JogoInicio() {
        //paus(P), copas(C), ouros(O), espadas(E)
        $baralho = array('2P', '3P', '4P', '5P', '6P', '7P', '8P', '9P', '10P', 'AP', 'QP', 'JP', 'KP',
            '2C', '3C', '4C', '5C', '6C', '7C', '8C', '9C', '10C', 'AC', 'QC', 'JC', 'KC',
            '2O', '3O', '4O', '5O', '6O', '7O', '8O', '9O', '10O', 'AO', 'QO', 'JO', 'KO',
            '2E', '3E', '4E', '5E', '6E', '7E', '8E', '9E', '10E', 'AE', 'QE', 'JE', 'KE');
        $j = new JogoModel();
        // var_dump($j->Shuffle($Baralho));
        $baralho = $j->shuffle($baralho);


        foreach ($baralho as $result) {
            $teste = ArmoredCore\WebObjects\Asset::image("assets/Cards/$result.png");
            echo '<img src="' . $teste . '" alt="' . $result . '">';
        }
        die();
    }

}
