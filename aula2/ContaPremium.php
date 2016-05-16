<?php

/**
 * Created by PhpStorm.
 * User: 10438
 * Date: 13/05/2016
 * Time: 15:51
 */
require_once 'Conta.php';

class ContaPremium extends Conta
{
    public function __construct()
    {
        $this->setSaldo( $this->getSaldo()+20 );
        return $this;
    }

    protected function calculoDeposito($valor)
    {
        $valorConta         = parent::calculoDeposito($valor);
        return $valorConta += 15;
    }

}

$conta = new ContaPremium();
echo $conta->depositar(100)->sacar(30)->getSaldo();
