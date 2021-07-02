let loaderElement = document.getElementById('laravel-livewire-loader');
let loaderTimeout;

Livewire.hook('message.sent', () => {
    loaderTimeout = setTimeout(() => {
        loaderElement.style.opacity = '1';
    }, parseInt(loaderElement.dataset.showDelay));
});

Livewire.hook('message.received', () => {
    loaderElement.style.opacity = '0';
    clearTimeout(loaderTimeout);
});
