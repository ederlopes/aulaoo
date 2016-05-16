<?php

require_once 'src/ECL/Conta/AbstractClass.php';

$conta  = new ContaPremium();
echo $conta->depositar(100)->sacar(30)->getSaldo();
