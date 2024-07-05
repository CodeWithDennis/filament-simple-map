<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Closure;

trait HasMapType
{
    protected Closure | string $mapType = 'roadmap';

    public function satellite(): static
    {
        $this->mapType = 'satellite';

        return $this;
    }

    public function getMapType(): string
    {
        return $this->evaluate($this->mapType);
    }
}
