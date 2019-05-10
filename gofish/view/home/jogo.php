<?php/*

//paus, copas, ouros, espadas
$Baralho = array('2P', '3P', '4P', '5P', '6P', '7P', '8P', '9P', '10P', 'AP', 'QP', 'JP', 'KP',
    '2C', '3C', '4C', '5C', '6C', '7C', '8C', '9C', '10C', 'AC', 'QC', 'JC', 'KC',
    '2O', '3O', '4O', '5O', '6O', '7O', '8O', '9O', '10O', 'AO', 'QO', 'JO', 'KO',
    '2E', '3E', '4E', '5E', '6E', '7E', '8E', '9E', '10E', 'AE', 'QE', 'JE', 'KE');

for ($i = 0; $i < 4; $i++) {

    $rand_keys = array_rand($Baralho, 2);
    $MinhaMao[] = $Baralho[$rand_keys[0]];
    $MaoBot[] = $Baralho[$rand_keys[1]];

    var_dump(sizeof($Baralho));

    foreach ($Baralho as $index => $teste) {
        if ($MinhaMao == $teste) {
            $getIndex = $index;
            //remove o valor acima descrito 
            unset($Baralho[$getIndex]);
        }
    }
    foreach ($Baralho as $index => $Baralhos) {
        if ($MaoBot == $Baralhos) {
            $getIndex = $index;
            //remove o valor acima descrito 
            unset($Baralho[$getIndex]);
        }
    }
}
echo "Resultado Minha mao: \n";
foreach ($MinhaMao as $result) {
    $teste = ArmoredCore\WebObjects\Asset::image("assets/Cards/$result.png");
    echo $result . "\n";
    echo '<img src="' . $teste . '" alt="' . $result . '">';
}
echo "Resultado Mao Bot: \n";
foreach ($MaoBot as $result) {
    echo $result . "\n";
}*/

?>