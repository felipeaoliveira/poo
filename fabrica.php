<?php

require_once './Carro.php';
require_once './CarroSedan.php';
require_once './CarroHatch.php';
require_once './Motor/interfaceMotor.php';
require_once './Motor/Flex.php';
require_once './MWM/Flex.php';

use Ford\Motor\Flex as FordFlex;
use MWM\Flex as MWMFlex;

$motor20 = new FordFlex("2.0");
$motor16 = new FordFlex("1.6");
$motormwm = new MWMFlex();

$carro1 = new Ford\CarroHatch("Vermelho", "convencional", $motor16, false); // instanciar.
$carro2 = new Ford\CarroSedan("Branco", "hidraulica", $motor20, true);
$carro3 = clone $carro1;

$carro1->cor = "Azul";
$carro2->cor = "Verde";

//echo Carro::MARCA;
echo $carro2->ligar();

try
{
    echo "antes de acelerar\n\n";
    $carro1->acelerar(30);
    echo "\n\n depois de acelerar\n\n";
} catch (Exception $ex) 
{
    echo $ex->getMessage();
}

var_dump($carro1, $carro2, $carro3);

if ($carro1 instanceof Carro)
{
    echo "verdade!\n";
} else {
    echo "falso\n";
}