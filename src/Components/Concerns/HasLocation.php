<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Closure;

trait HasLocation
{
    protected Closure | string | null $location = null;

    public function location(Closure | string | null $location): static
    {
        $this->location = $location;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->evaluate($this->location);
    }
}
