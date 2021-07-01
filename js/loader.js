let loaderElement = document.getElementById('laravel-livewire-loader');

Livewire.hook('message.sent', () => {
    loaderElement.style.opacity = '1';
});

Livewire.hook('message.received', () => {
    loaderElement.style.opacity = '0';
});
