<?php

namespace Ford;

class CarroSedan extends Carro
{
    public function ligar() 
    {
        echo "Ativado\n\n";
        parent::ligar();
    }
}