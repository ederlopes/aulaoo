<?php

/**
 * Created by PhpStorm.
 * User: 10438
 * Date: 13/05/2016
 * Time: 15:51
 */

namespace ECL\Conta\Types;

use ECL\Conta\AbstractClass;

class ContaPremium extends AbstractClass
{
    public function __construct()
    {
        $this->setSaldo( $this->getSaldo()+20 );
        return $this;
    }

    protected function calculaDeposito($valor)
    {
        $valorConta         = parent::calculoDeposito($valor);
        return $valorConta += 15;
    }

}