<?php

namespace CodeWithDennis\SimpleMap;

use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SimpleMapServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-simple-map';

    public static string $viewNamespace = 'filament-simple-map';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->askToStarRepoOnGitHub('codewithdennis/filament-simple-map');
            });

        $configFileName = $package->shortName();

        if (file_exists($package->basePath("/../config/{$configFileName}.php"))) {
            $package->hasConfigFile();
        }

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    public function packageRegistered(): void
    {
    }

    public function packageBooted(): void
    {
        FilamentAsset::register($this->getAssets(), $this->getAssetPackageName());
        FilamentAsset::registerScriptData([], $this->getAssetPackageName());
    }

    protected function getAssetPackageName(): ?string
    {
        return 'codewithdennis/filament-simple-map';
    }

    protected function getAssets(): array
    {
        return [
            // AlpineComponent::make('filament-simple-map', __DIR__ . '/../resources/dist/components/filament-simple-map.js'),
            Css::make('filament-simple-map-styles', __DIR__.'/../resources/dist/filament-simple-map.css'),
            Js::make('filament-simple-map-scripts', __DIR__.'/../resources/dist/filament-simple-map.js'),
        ];
    }
}
