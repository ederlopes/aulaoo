<?php

namespace ECL\Conta\Types;

use ECL\Conta\AbstractClass;

class Conta extends AbstractClass
{
    protected function calculaDeposito($valor)
    {
        return $valor += 10;
    }
}
