<?php
    require_once ('Cliente.php');

    $dadosclientes = array(
        "nome"  => "TESTE ",
        "idade" => "10",
        "cpf"   => "000000000",
    );

    $cliente = array();

    for ($i=1;$i<=10;$i++)
    {
        $indice             = $dadosclientes['cpf'].$i;
        $objCliente         = new Cliente();
        $objCliente->nome   = $dadosclientes['nome'].$i;
        $objCliente->idade  = $dadosclientes['idade']+$i;
        $objCliente->cpf    = $indice;
        $cliente[$indice]   = $objCliente;
    }

?>