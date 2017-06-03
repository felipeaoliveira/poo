<?php

namespace Ford;

class Carro
{
    const MARCA = "Ford";
    const MODELO = "Fiesta";
    
    public $cor = "Preto";
    private $tipoDirecao = "Hidraulica";
    private $motor = 2.0;
    private $arCondicionado = true;
    
    /**
     * 
     * @param type $cor
     * @param type $direcao
     * @param type $motor
     * @param type $arCondicionado
     */
    public function __construct($cor, $direcao, \Ford\Motor\interfaceMotor $motor, $arCondicionado) 
    {
        $this->cor = $cor;
        $this->tipoDirecao = $direcao;
        $this->motor = $motor;
        $this->arCondicionado = $arCondicionado;
    }
    
    /**
     * 
     * @return type
     */
    public function __toString() 
    {
        return self::MARCA. '-' . self::MODELO;
    }
    
    /**
     * 
     * @param type $name
     * @return type
     */
    public function __get($name) 
    {
        return $this->$name;
    }

    /**
     * 
     * @param type $name
     * @param type $value
     */
    public function __set($name, $value) 
    {
        $this->$name = $value;
    }
    
    /**
     * 
     * @param type $name
     * @param type $arguments
     */
    public function __call($name, $arguments) 
    {
        echo "você chamou a função $name\n\n";
    }

    /**
     * Ligar o carro
     */
    public function ligar()
    {
        echo "Carro ligado!";
    }
    
        
    public function trocarMarcha()
    {
        
    }
    
    public function acelerar($valor)
    {
        $this->motor->acelerar($valor);
    }
    
    public function freiar()
    {
        
    }
}
