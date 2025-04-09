<?php

namespace App\Http\Controllers\Awesome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Awesome\Event;

class AwesomeController extends Controller
{
    public function retornaMoedas(Request $request)
    {
        try {

            $event = (new Event)->retornaMoedas($request->moedas);

            return $event;

        }  catch (\Exception $e) {
    
        }
    }

    public function retornaFechamentoDias(Request $request)
    {
        try {

            $event = (new Event)->retornaFechamentoDias($request->moeda, $request->numero_dias);

            dd($event);

        }  catch (\Exception $e) {
    
        }
    }
}
