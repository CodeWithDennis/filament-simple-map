# Filament Simple Map

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codewithdennis/filament-simple-map.svg?style=flat-square)](https://packagist.org/packages/codewithdennis/filament-simple-map)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/codewithdennis/filament-simple-map/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/codewithdennis/filament-simple-map/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/codewithdennis/filament-simple-map.svg?style=flat-square)](https://packagist.org/packages/codewithdennis/filament-simple-map)

This package offers a straightforward and easy-to-use map action component for your Filament application. The packages use an iframe under the hood to display the map, which makes it easy to integrate
with your
application. Make sure you have a Google Maps API key to use this package. You can get one [here](https://developers.google.com/maps/documentation/javascript/get-api-key) for free.

## Installation

You can install the package via composer:

```bash
composer require codewithdennis/filament-simple-map
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-simple-map-config"
```

This is the contents of the published config file:

```php
return [
    'google_maps_embed_api' => env('GOOGLE_MAPS_EMBED_API'),
];

```

## Usage

```php
use CodeWithDennis\SimpleMap\Components\Infolists\SimpleMap;

SimpleMap::make('map')
    ->zoom(10)
    ->address(fn($record) => $record->quoteRequest->address)
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [CodeWithDennis](https://github.com/CodeWithDennis)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
