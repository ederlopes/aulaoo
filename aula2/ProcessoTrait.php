<?php

/**
 * Created by PhpStorm.
 * User: 10438
 * Date: 16/05/2016
 * Time: 09:51
 */

/*
 * uma trait é um containner de funcoes que podem ser utilizadas em difersas classes, ela não
 * pode ser instanciada e é utilizada assim
 *  use Nome da Trait na classse que precisa herdar as funcoes
 */
trait ProcessoTrait
{
    public function iniciaProcesso()
    {
        echo '----------finaliza processo';
    }

    public function FinalizaProcesso()
    {
        echo '----------finaliza processo';
    }
}