<?php
/*
 * A classe abstrata segue a linha de raciocinio de uma interface porem nela
 * vc pode implementar alguns metodos e deixar outros para que a classe que herde
 * há implemente.
 */

namespace ECL\Conta;
use ECL\Conta\Util\ProcessoTrait;

abstract class AbstractClass
{
    protected $saldo;

    //use ProcessoTrait;

    public function depositar( $valor )
    {
        $this->iniciaProcesso();
        $this->setSaldo( $this->getSaldo() + $this->calculoDeposito($valor)  );
        return $this;
    }

    public function sacar($valor)
    {
        $this->iniciaProcesso();
        if ( $this->getSaldo() >= $valor )
        {
            $this->setSaldo( $this->getSaldo() - $valor  );
        }
        return $this;

    }

    public function getSaldo()
    {
        $this->iniciaProcesso();
        return $this->saldo;
        return $this;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
        return $this;
    }

    abstract protected function calculaDeposito( $valor );
}