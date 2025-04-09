<?php

namespace App\Modules\Awesome;

use App\Modules\Awesome\Awesome;

class Event extends Awesome
{
    public function __construct()
    {
        parent::__construct();
    }

    public function retornaMoedas($moedas)
    {
        //$path = 'send-code';
        $path = 'last';

        return $this->request($path, 'GET', $moedas);
    }

    public function retornaFechamentoDias($moeda, $numero_dias)
    {
        //$path = 'send-code';
        $path = 'json/daily';
        $data = $moeda . "/" . $numero_dias;

        return $this->request($path, 'GET', $data);
    }
}