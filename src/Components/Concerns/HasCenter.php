<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Closure;

trait HasCenter
{
    protected Closure | string | null $center = null;

    public function center(Closure | string | null $center): static // TODO: Replace with lat and lng
    {
        $this->center = $center;

        return $this;
    }

    public function getCenter(): ?string
    {
        return $this->evaluate($this->center);
    }
}
