<?php

namespace App\Modules\Awesome;

use App\Modules\Awesome\Awesome;

class Event extends Awesome
{
    public function __construct()
    {
        parent::__construct();
    }

    public function retornaMoedas($data)
    {
        //$path = 'send-code';
        $path = 'last';

        return $this->request($path, 'GET', $data);
    }
}