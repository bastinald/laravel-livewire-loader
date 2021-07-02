let loaderElement = document.getElementById('laravel-livewire-loader');
let loaderTimeout = null;

Livewire.hook('message.sent', () => {
    if (loaderTimeout == null) {
        loaderTimeout = setTimeout(() => {
            loaderElement.style.opacity = '1';
        }, parseInt(loaderElement.dataset.showDelay));
    }
});

Livewire.hook('message.received', () => {
    if (loaderTimeout != null) {
        loaderElement.style.opacity = '0';
        clearTimeout(loaderTimeout);
        loaderTimeout = null;
    }
});
