let loaderElement = document.getElementById('laravel-livewire-loader');
let loaderTimeout = null;

Livewire.hook('message.sent', () => {
    if (loaderTimeout == null) {
        loaderTimeout = setTimeout(() => {
            loaderElement.classList.add('show');
        }, parseInt(loaderElement.dataset.showDelay));
    }
});

Livewire.hook('message.received', () => {
    if (loaderTimeout != null) {
        loaderElement.classList.remove('show');
        clearTimeout(loaderTimeout);
        loaderTimeout = null;
    }
});
