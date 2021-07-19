var Turbolinks = require("turbolinks");

Turbolinks.start();

document.addEventListener("turbolinks:render", function(event) {
    window.livewire.restart();
    
    window.$ = window.jQuery = require('jquery');
    
    $('.select2').select2({
        maximumSelectionLength: 10,
        allowClear: true,
        theme: 'bootstrap4',
        width: '100%',
    });
});

Turbolinks.BrowserAdapter.prototype.showProgressBarAfterDelay = function() {
    return this.progressBarTimeout = setTimeout(this.showProgressBar, 50);
};