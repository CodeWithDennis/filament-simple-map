<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;

trait HasModalContent
{
    protected string $baseUrl = 'https://www.google.com/maps/embed/v1/';

    protected function buildUrl(string $path, array $parameters): string
    {
        $parameters['key'] = $this->getKey();

        return $this->baseUrl . $path . '?' . http_build_query($parameters);
    }

    protected function getPlaceUrl(): string
    {
        $parameters = [
            'q' => $this->getAddress(),
            'maptype' => $this->getMapType(),
            'language' => $this->getLanguage(),
            'region' => $this->getRegion(),
            'zoom' => $this->getZoom(),
            'center' => $this->getCenter(),
        ];

        return $this->buildUrl('place', $parameters);
    }

    protected function getDirectionsUrl(): string
    {
        $parameters = [
            'origin' => $this->getOrigin(),
            'destination' => $this->getDestination(),
            'waypoints' => $this->getWaypoints() ? implode('|', $this->getWaypoints()) : null,
            'language' => $this->getLanguage(),
            'region' => $this->getRegion(),
            'units' => $this->getUnits(),
            'avoid' => $this->getAvoid() ? implode('|', $this->getAvoid()) : null,
            'zoom' => $this->getZoom(),
            'maptype' => $this->getMapType(),
            'mode' => $this->getMode(),
            'center' => $this->getCenter(),
        ];

        return $this->buildUrl('directions', $parameters);
    }

    protected function getStreetViewUrl(): string
    {
        $parameters = [
            'location' => $this->getLocation(),
            'heading' => $this->getHeading(),
            'pitch' => $this->getPitch(),
            'fov' => $this->getFov(),
            'language' => $this->getLanguage(),
            'region' => $this->getRegion(),
            'center' => $this->getCenter(),
        ];

        return $this->buildUrl('streetview', $parameters);
    }

    protected function getSearchUrl(): string
    {
        $parameters = [
            'q' => $this->getQuery(),
            'zoom' => $this->getZoom(),
            'maptype' => $this->getMapType(),
            'language' => $this->getLanguage(),
            'region' => $this->getRegion(),
            'center' => $this->getCenter(),
        ];

        return $this->buildUrl('search', $parameters);
    }

    protected function getViewUrl(): string
    {
        $parameters = [
            'center' => $this->getCenter(),
            'zoom' => $this->getZoom(),
            'maptype' => $this->getMapType(),
        ];

        return $this->buildUrl('view', $parameters);
    }

    public function getBuildUrl(): string
    {
        return match ($this->getMapMode()) {
            'directions' => $this->getDirectionsUrl(),
            'streetview' => $this->getStreetViewUrl(),
            'search' => $this->getSearchUrl(),
            'view' => $this->getViewUrl(),
            default => $this->getPlaceUrl(),
        };
    }

    public function getModalContent(): View | Htmlable | null
    {
        return view('filament-simple-map::components.infolists.simple-map', [
            'url' => $this->getBuildUrl(),
        ]);
    }
}
