<div
        class="filament-simple-map"
        ax-load-css="{{ \Filament\Support\Facades\FilamentAsset::getStyleHref('filament-simple-map-styles', package: 'codewithdennis/filament-simple-map') }}">
    <iframe
            src="https://www.google.com/maps/embed/v1/place?q={{ $address }}&key={{ $key }}&zoom={{ $zoom }}"
            class="w-full h-full absolute block top-0 border-0 p-0"
    />
</div>

