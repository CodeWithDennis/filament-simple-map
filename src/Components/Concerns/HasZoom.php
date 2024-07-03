<?php

namespace CodeWithDennis\SimpleMap\Components\Concerns;

use Closure;

trait HasZoom
{
    protected Closure | int $zoom = 10;

    public function zoom(Closure | int $zoom): static
    {
        $this->zoom = $zoom;

        return $this;
    }

    public function getZoom(): ?int
    {
        return $this->evaluate($this->zoom);
    }
}
