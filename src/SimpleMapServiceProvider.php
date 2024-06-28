<?php

namespace CodeWithDennis\SimpleMap;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SimpleMapServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-simple-map';

    public static string $viewNamespace = 'filament-simple-map';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasConfigFile();

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    protected function getAssetPackageName(): ?string
    {
        return 'codewithdennis/filament-simple-map';
    }
}
