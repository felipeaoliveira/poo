<?php

namespace Ford\Motor;

class Flex implements interfaceMotor
{
    private $potencia;
    private $aceleracao = 0;
    private $ligado = false;
    
    public function __construct($potencia) 
    {
        $this->potencia = $potencia;
    }
    
    public function ligar()
    {
        $this->ligado = true;
    }
    
    public function acelerar($quant)
    {
        if ($this->ligado == true)
        {
            $this->aceleracao = $quant;
        } else {
            throw new \Exception("O motor não está ligado");
        }
        
    }
}
