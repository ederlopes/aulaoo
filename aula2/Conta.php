<?php


class Conta extends AbstractClass
{
    protected function calculoDeposito($valor)
    {
        return $valor += 10;
    }
 
}
