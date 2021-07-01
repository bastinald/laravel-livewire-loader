# Laravel Livewire Loader

This package adds a global loading spinner to your Laravel Livewire project. The loading spinner shows when any Livewire action is being executed. This keeps users engaged as they won't become frustrated by page hanging due to network latency. It also keeps your code much cleaner, as you won't be having to add loading spinners all over the place.

## Documentation

- [Installation](#installation)
- [Publishing the View](#publishing-the-view)

## Installation

Require the package:

```console
composer require bastinald/laravel-livewire-loader
```

Add the `livewire:loader` component to your app layout view:

```html
<livewire:loader/>
<livewire:scripts/>
<script src="{{ asset('js/app.js') }}"></script>
```

Require `../../vendor/bastinald/laravel-livewire-loader/js/loader` in your app javascript file:

```javascript
require('@popperjs/core');
require('bootstrap');
require('../../vendor/bastinald/laravel-livewire-loader/js/loader');
```

## Publishing the View

Use your own loader view by publishing the package view:

```console
php artisan vendor:publish --tag=laravel-livewire-loader
```

Now edit the view file inside `resources/views/vendor/laravel-livewire-loader`. The package will use this view to render the component.
