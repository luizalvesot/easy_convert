//import './bootstrap';
import 'bootstrap';

import $ from 'jquery';
import 'jquery-mask-plugin';

document.addEventListener('livewire:load', function () {
    applyMask();

    // Reaplica máscara após qualquer atualização do Livewire
    Livewire.hook('message.processed', () => {
        applyMask();
    });

    function applyMask() {
        $('.money').mask('#.##0,00', { reverse: true });
    }
});