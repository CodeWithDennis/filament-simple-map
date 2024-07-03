<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

trait HasKey
{
    public function getKey(): ?string
    {
        return config('filament-simple-map.google_maps_embed_api_key');
    }
}
