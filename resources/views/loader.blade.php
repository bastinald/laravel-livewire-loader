<div id="laravel-livewire-loader" class="fade position-fixed start-0 end-0 bottom-0 text-center mb-3"
    style="pointer-events: none; z-index: 1070;" data-show-delay="{{ config('laravel-livewire-loader.show_delay') }}">
    <div class="d-inline-block bg-white border rounded p-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="text-muted" style="width: 1.5rem; height: auto;">
            <path fill="currentColor" d="M256 0C238.3 0 224 14.33 224 32v64c0 17.67 14.31 32 32 32s32-14.33 32-32V32C288
            14.33 273.7 0 256 0zM256 384c-17.69 0-32 14.33-32 32v64c0 17.67 14.31 32 32 32s32-14.33 32-32v-64C288 398.3
            273.7 384 256 384zM480 224h-64c-17.69 0-32 14.33-32 32s14.31 32 32 32h64c17.69 0 32-14.33 32-32S497.7 224 480
            224zM128 256c0-17.67-14.31-32-32-32H32C14.31 224 0 238.3 0 256s14.31 32 32 32h64C113.7 288 128 273.7 128
            256zM369.1 174.9c8.188 0 16.38-3.125 22.62-9.359l45.28-45.25c12.5-12.5 12.5-32.77
            0-45.27s-32.75-12.48-45.25-.0156L346.5 120.2c-12.5 12.5-12.5 32.77 0 45.27C352.8 171.7 360.9 174.9 369.1
            174.9zM120.3 346.5l-45.28 45.25c-12.5 12.5-12.5 32.77 0 45.27c6.25 6.25 14.44 9.375 22.62 9.375s16.38-3.125
            22.62-9.359l45.28-45.25c12.5-12.5 12.5-32.77 0-45.27C153 334 132.8 334 120.3 346.5zM391.8
            346.5c-12.5-12.47-32.75-12.48-45.25 .0156c-12.5 12.5-12.5 32.77 0 45.27l45.28 45.25c6.25 6.234 14.44 9.359
            22.62 9.359s16.38-3.125 22.62-9.375c12.5-12.5 12.5-32.77 0-45.27L391.8 346.5zM120.2 74.97C107.7 62.5 87.47
            62.48 74.97 74.98s-12.5 32.77 0 45.27L120.3 165.5C126.5 171.7 134.7 174.9 142.9 174.9S159.3 171.7 165.5
            165.5c12.5-12.5 12.5-32.77 0-45.27L120.2 74.97z"></path>
        </svg>
    </div>
</div>

<style>
    #laravel-livewire-loader svg {
        -webkit-animation: spin {{ config('laravel-livewire-loader.animation_speed') }}ms linear infinite;
        -moz-animation: spin {{ config('laravel-livewire-loader.animation_speed') }}ms linear infinite;
        animation: spin {{ config('laravel-livewire-loader.animation_speed') }}ms linear infinite;
    }

    @-moz-keyframes spin {
        100% { -moz-transform: rotate(360deg); }
    }
    @-webkit-keyframes spin {
        100% { -webkit-transform: rotate(360deg); }
    }
    @keyframes spin {
        100% { -webkit-transform: rotate(360deg); transform: rotate(360deg); }
    }
</style>
