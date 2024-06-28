<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

trait HasKey
{
    public function getKey(): ?string
    {
        return config('simple-map.google_maps_embed_api'); // TODO(fix): Config is not being found
    }
}