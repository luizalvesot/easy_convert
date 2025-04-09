<div class="d-flex" style="min-height: 82vh;">
        @if($mostrarSidebar)
            <div class="pb-4 full-height" style="background-color: rgb(34, 34, 34); width: 220px;">
                <ul class="nav flex-column nav-pills">
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#tab1">Conversor</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab2">Análises</button>
                    </li>
                </ul>
            </div>
        @endif

        <!-- Conteúdo das Abas -->
        <div class="flex-grow-1">
            <button wire:click="toggleSidebar" class="btn btn-outline-light m-2">
                @if($mostrarSidebar)
                <i class="bi bi-list"></i>
                @else
                <i class="bi bi-list"></i>
                @endif
            </button>
            <div class="tab-content mt-3" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                    <div class="row justify-content-center">
                        <div class="imagem-circular shadow">
                            <img src="https://w7.pngwing.com/pngs/251/692/png-transparent-united-states-one-dollar-bill-united-states-dollar-banknote-united-states-five-dollar-bill-dollar-1-us-dollar-banknote-united-states-cash-replacement-banknote.png" alt="Dóllar">
                          </div>
                    </div>
                    <div class="row justify-content-center pt-5 m-3">
                        <div class="col-md-4 my-1">
                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0 input-maior shadow py-2">$</span>
                                <input type="text" class="form-control border-start-0 input-maior shadow text-secondary text-center py-2 money rounded-end" wire:model.lazy="vlrMoedaOrigem"  placeholder="0,00">
                            </div>
                        </div>
                        <div class="col-md-4 my-1">
                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0 input-maior shadow py-2">R$</span>
                                <input type="text" class="form-control border-start-0 input-maior text-secondary text-center shadow py-2 money rounded-end" wire:model.lazy="vlrMoedaDestino"  placeholder="0,00">
                            </div>
                        </div>
                    </div>  
                    <div class="row justify-content-center">
                       <div class="col-md-9 my-2">
                            <div class="alert alert-info">
                                Altere o valor de um dos campos para calcular o que deseja. Após digitar, pressione ENTER para calcular.
                            </div>
                       </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="tab2" role="tabpanel">
                    <h3 class="h3 text-center text-white">ANÁLISES</h3>
                </div>
            </div>

            <script>
                document.addEventListener('livewire:load', function () {
                    // Quando qualquer aba for mostrada
                    const triggerTabList = document.querySelectorAll('button[data-bs-toggle="pill"]');
                    triggerTabList.forEach(function (tab) {
                        tab.addEventListener('shown.bs.tab', function (event) {
                            const targetId = event.target.getAttribute('data-bs-target');
            
                            if (targetId === '#tab1') {
                                @this.set('moedaOrigemSelecionada', 'BRL');
                                @this.set('moedaDestinoSelecionada', 'USD');
                            }
            
                            if (targetId === '#tab2') {
                                @this.set('moedaOrigemSelecionada', 'BRL');
                                @this.set('moedaDestinoSelecionada', 'EUR');
                            }
                        });
                    });
                });
            </script>
        </div>
</div>
