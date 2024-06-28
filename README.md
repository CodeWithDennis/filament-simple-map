# This package offers a straightforward and easy-to-use map action component for your Filament application.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codewithdennis/filament-simple-map.svg?style=flat-square)](https://packagist.org/packages/codewithdennis/filament-simple-map)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/codewithdennis/filament-simple-map/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/codewithdennis/filament-simple-map/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/codewithdennis/filament-simple-map/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/codewithdennis/filament-simple-map/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/codewithdennis/filament-simple-map.svg?style=flat-square)](https://packagist.org/packages/codewithdennis/filament-simple-map)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require codewithdennis/filament-simple-map
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-simple-map-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-simple-map-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-simple-map-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$simpleMap = new CodeWithDennis\SimpleMap();
echo $simpleMap->echoPhrase('Hello, CodeWithDennis!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [CodeWithDennis](https://github.com/CodeWithDennis)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
