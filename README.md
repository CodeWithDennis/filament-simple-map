# Filament Simple Map

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codewithdennis/filament-simple-map.svg?style=flat-square)](https://packagist.org/packages/codewithdennis/filament-simple-map)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/codewithdennis/filament-simple-map/pint.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/codewithdennis/filament-simple-map/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/codewithdennis/filament-simple-map.svg?style=flat-square)](https://packagist.org/packages/codewithdennis/filament-simple-map)

This package provides a **simple** and user-friendly map display action component for your Filament application. It utilizes an iframe to render the map, ensuring seamless integration. Ensure you have a [Google Maps API](https://developers.google.com/maps/documentation/javascript/get-api-key)
key to use this
package.

![thumbnail.jpg](https://raw.githubusercontent.com/CodeWithDennis/filament-simple-map/main/resources/images/thumbnail.jpg)

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
This package supports the following Google Maps modes `place`, `view`, `streetview` `search` and `directions`. The default mode is `place`.

### Place
Methods that are available with the default **place** mode.

Defines map marker location.

```php
->address('City Hall, New York, NY')
```

Defines center of the map view.

```php
->center('37.4218,-122.0840')
```

Sets initial zoom level of the map.

```php
->zoom(10) // 0 to 21
```

Sets the map to satellite view. (default: roadmap)

```php
->satellite()
```

Defines the language to use for UI elements and for the display of labels on map tiles.

```php
->language('en')
```

Defines the appropriate borders and labels to display, based on geopolitical sensitivities.

```php
->region('en')
```

Here is an example of how to use the **place** mode.

```php
SimpleMap::make()
    ->address('City Hall, New York, NY')
    ->center('37.4218,-122.0840')
    ->zoom(10)
    ->satellite()
    ->language('en')
    ->region('US')
```

### View

To use the **view** mode, you need to call the `viewing` method.

Sets the map to viewing mode.

```php
->viewing()
```

Defines center of the map view.

```php
->center('-33.8569,151.2152')
```

Sets initial zoom level of the map.

```php
->zoom(10) // 0 to 21
```

Sets the map to satellite view. (default: roadmap)

```php
->satellite()
```

Here is an example of how to use the `view` mode.

```php
SimpleMap::make()
    ->viewing()
    ->center('-33.8569,151.2152')
    ->zoom(10)
    ->satellite()
```

### Directions

To use the **directions** mode, you need to call the `directions` method.

Defines the starting point for calculating directions.

```php
->origin('Amsterdam, Netherlands')
```

Defines the destination point for calculating directions.

```php
->destination('Rotterdam, Netherlands')
```

Specifies one or more intermediary places to route directions between the origin and destination.

```php
->waypoints([
    'Utrecht, Netherlands',
    'Den Haag, Netherlands'
])
```

Specifies features to avoid in directions. Note that this doesn't preclude routes that include the restricted feature(s); it biases the result to more favorable routes.

```php
->avoid([
    'tolls',
    'highways',
    'ferries'
])
```

Sets the mode of transport to flying.

```php
->flying()
```

Sets the mode of transport to walking.

```php
->walking()
```

Sets the mode of transport to bicycling.

```php
->bicycling()
```

Sets the mode of transport to transit.

```php
->transit()
```

Sets the mode of transport to driving.

```php
->driving()
```

Sets the unit system to imperial. (default: metric)

```php
->imperial()
```

Defines center of the map view.

```php
->center('52.3676,4.9041')
```

Sets the map to satellite view. (default: roadmap)

```php
->satellite()
```

Defines the language to use for UI elements and for the display of labels on map tiles.

```php
->language('nl')
```

Defines the appropriate borders and labels to display, based on geopolitical sensitivities.

```php
->region('nl')
```

Here is an example of how to use the **directions** mode.

```php
SimpleMap::make()
    ->directions()
    ->origin('Amsterdam, Netherlands')
    ->destination('Rotterdam, Netherlands')
    ->walking()
    ->imperial()
    ->satellite()
    ->language('nl')
```

### Streetview

To use the **streetview** mode, you need to call the `streetview` method.

Defines the location to display street view.

```php
->location('52.3676,4.9041')
```

Indicates the compass heading of the camera in degrees clockwise from North.

```php
->heading(0) // -180 to 360
```

Specifies the angle, up or down, of the camera.

```php
->pitch(0) // -90 to 90
```

Determines the horizontal field of view of the image.

```php
->fov(100) // 10 to 100
```

Defines center of the map view.

```php
->center('52.3676,4.9041')
```

Sets initial zoom level of the map.

```php
->zoom(10) // 0 to 21
```

Defines the language to use for UI elements and for the display of labels on map tiles.

```php
->language('nl')
```

Defines the appropriate borders and labels to display, based on geopolitical sensitivities.

```php
->region('nl')
```

### Search

To use the **search** mode, you need to call the `search` method.

Defines the search term.

```php
->query('restaurants near Amsterdam, Netherlands')
```

Defines center of the map view.

```php
->center('52.3676,4.9041')
```

Sets initial zoom level of the map.

```php
->zoom(10) // 0 to 21
```

Sets the map to satellite view. (default: roadmap)

```php
->satellite()
```

Defines the language to use for UI elements and for the display of labels on map tiles.

```php
->language('nl')
```

Defines the appropriate borders and labels to display, based on geopolitical sensitivities.

```php
->region('nl')
```

Here is an example of how to use the **search** mode.

```php
SimpleMap::make()
    ->search()
    ->query('restaurants near Amsterdam, Netherlands')
    ->center('52.3676,4.9041')
    ->zoom(10)
```

## Screenshots

![dark.png](https://raw.githubusercontent.com/CodeWithDennis/filament-simple-map/main/resources/images/dark.png)
![light.png](https://raw.githubusercontent.com/CodeWithDennis/filament-simple-map/main/resources/images/light.png)
![dark-route.png](https://raw.githubusercontent.com/CodeWithDennis/filament-simple-map/main/resources/images/dark-route.png)
![light-route.png](https://raw.githubusercontent.com/CodeWithDennis/filament-simple-map/main/resources/images/light-route.png)
## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [CodeWithDennis](https://github.com/CodeWithDennis)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
