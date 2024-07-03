# Filament Simple Map

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codewithdennis/filament-simple-map.svg?style=flat-square)](https://packagist.org/packages/codewithdennis/filament-simple-map)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/codewithdennis/filament-simple-map/pint.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/codewithdennis/filament-simple-map/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/codewithdennis/filament-simple-map.svg?style=flat-square)](https://packagist.org/packages/codewithdennis/filament-simple-map)

This package provides a **simple** and user-friendly map display action component for your Filament application. It utilizes an iframe to render the map, ensuring seamless integration. Note that this
package is **solely for displaying a map** and does not support any additional features. Ensure you have a [Google Maps API](https://developers.google.com/maps/documentation/javascript/get-api-key)
key to use this
package.

![thumbnail.png](https://raw.githubusercontent.com/CodeWithDennis/filament-simple-map/main/resources/images/thumbnail.png)

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
    'google_maps_embed_api_key' => env('GOOGLE_MAPS_EMBED_API_KEY'),
];

```

## Usage

Here are a couple of examples of how you can use the `SimpleMap` component.

```php
use CodeWithDennis\SimpleMap\Components\Actions\SimpleMap;

protected function getActions(): array
    {
        return [
            SimpleMap::make('address')
                ->address(fn(Model $record) => $record->address)),
        ];
    }
```

```php
use CodeWithDennis\SimpleMap\Components\Infolists\SimpleMap;

TextEntry::make('address')
    ->action(
        SimpleMap::make('address')
            ->address(fn(Model $record) => $record->address))
    )
```

```php
use CodeWithDennis\SimpleMap\Components\Forms\SimpleMap;

Forms\Components\TextInput::make('address')
    ->suffixAction(
        SimpleMap::make('asd')
            ->address('Mac Donalds, New York, USA'),
    )
```

### Zoom

If you want to set the zoom level of the map, you can use the `zoom` method. The default zoom level is `10`.

```php
->zoom(10)
```


## Screenshots

![dark.png](https://raw.githubusercontent.com/CodeWithDennis/filament-simple-map/main/resources/images/dark.png)
![light.png](https://raw.githubusercontent.com/CodeWithDennis/filament-simple-map/main/resources/images/light.png)

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [CodeWithDennis](https://github.com/CodeWithDennis)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
