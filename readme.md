# Laravel Livewire Loader

This package adds a global loading spinner to your Laravel Livewire project. The loading spinner shows when any Livewire action is being executed. This keeps users engaged as they won't become frustrated by page hanging due to network latency. It also keeps your code much cleaner, as you won't be having to add loading spinners all over the place.

## Documentation

- [Requirements](#requirements)
- [Installation](#installation)
- [Publishing Assets](#publishing-assets)
    - [Custom Config](#custom-config)
    - [Custom View](#custom-view)

## Requirements

- Bootstrap 5 must be installed via webpack first

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

Require `../../vendor/bastinald/laravel-livewire-loader/resources/js/loader` in your app javascript file:

```javascript
require('@popperjs/core');
require('bootstrap');
require('../../vendor/bastinald/laravel-livewire-loader/resources/js/loader');
```

## Publishing Assets

### Custom Config

Customize the loader configuration by publishing the config file:

```console
php artisan vendor:publish --tag=laravel-livewire-loader:config
```

Now you can easily change things like the show delay and animation speed.

### Custom View

Use your own loader view by publishing the view file:

```console
php artisan vendor:publish --tag=laravel-livewire-loader:views
```

Now edit the view file inside `resources/views/vendor/laravel-livewire-loader`. The package will use this view to render the component.
