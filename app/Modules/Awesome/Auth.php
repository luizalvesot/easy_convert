<?php

namespace App\Modules\Awesome;

abstract class Auth
{
    protected $domain;
    //protected $token;

    public function __construct()
    {
        $this->domain = config('awesome.domain');
        //$this->token = config('falecomigoai.token');
    }
}