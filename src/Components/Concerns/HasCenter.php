<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Closure;

trait HasCenter
{
    protected Closure | string | null $center = null;

    public function center(Closure | string | null $center): static
    {
        $this->center = $center;

        return $this;
    }

    public function getCenter(): ?string
    {
        return $this->evaluate($this->center);
    }
}
