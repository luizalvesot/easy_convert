<?php

namespace App\Livewire\Awesome\Moedas;

use Livewire\Component;
use App\Models\Awesome\Moeda;
use Illuminate\Support\Facades\Http;

class Index extends Component
{

    public $moedaOrigemSelecionada;
    public $moedaDestinoSelecionada;
    public $vlrMoedaOrigem = 1;
    public $vlrMoedaDestino;
    public $cotacao = 1;
    public bool $mostrarSidebar = true;

    public function mount()
    {
        $this->moedaOrigemSelecionada = 'BRL';
        $this->moedaDestinoSelecionada = 'USD';
        $this->atualizarCotacao();
        $this->vlrMoedaDestino = number_format($this->vlrMoedaOrigem * $this->cotacao, 2, '.', '');
    }

    public function toggleSidebar()
    {
        $this->mostrarSidebar = !$this->mostrarSidebar;
    }

    public function updatedVlrMoedaOrigem($value)
    {
        // Substitui vírgula por ponto
        $valorConvertido = str_replace(',', '.', $value);

        if (is_numeric($valorConvertido) && $this->cotacao > 0) {
            $this->vlrMoedaDestino = number_format($valorConvertido * $this->cotacao, 2, '.', '');
        } else {
            $this->vlrMoedaDestino = null;
        }
    }
    
    public function updatedVlrMoedaDestino($value)
    {
        // Substitui vírgula por ponto
        $valorConvertido = str_replace(',', '.', $value);

        if (is_numeric($valorConvertido) && $this->cotacao > 0) {
            $this->vlrMoedaOrigem = number_format($valorConvertido / $this->cotacao, 2, '.', '');
        } else {
            $this->vlrMoedaOrigem = null;
        }
    }

    public function atualizarCotacao()
    {
        $moeda = Moeda::where('code', $this->moedaDestinoSelecionada)->first();
        $this->cotacao = $moeda ? $moeda->ask : 1;
    }

    public function render()
    {
        return view('livewire.awesome.moedas.index');
    }
}
